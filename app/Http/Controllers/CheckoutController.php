<?php

namespace App\Http\Controllers;

use App\Mail\ReminderPaymentMail;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Midtrans\Config;
use Midtrans\Snap;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->session()->get('user');
        $productOrder = Cart::where('user_id', $user->id)->get();
//        dd($productOrder->toArray());
        return view('pages.client.checkout.checkout', compact('user', 'productOrder'));
    }

    public function store(Request $request)
    {
        $user = $request->session()->get('user');

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'detail_address' => 'nullable|string',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'products' => 'required|array',
            'products.*.product_id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
            'payment_method' => 'required|string',
        ]);

        DB::beginTransaction();

        try {
            $order = Order::create([
                'user_id' => $user->id,
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'address' => $validated['address'],
                'detail_address' => $validated['detail_address'] ?? null,
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'status' => 'pending',
                'total_price' => 0,
            ]);

            $totalPrice = 0;
            foreach ($validated['products'] as $productData) {
                $product = Product::find($productData['product_id']);

                $discountedPrice = $product->price;
                if ($product->discount) {
                    if ($product->discount->percentage) {
                        $discountedPrice = $product->price - ($product->price * $product->discount->percentage / 100);
                    } elseif ($product->discount->amount) {
                        $discountedPrice = $product->price - $product->discount->amount;
                    }
                }

                $subtotal = $discountedPrice * $productData['quantity'];
                $totalPrice += $subtotal;

                $order->orderItems()->create([
                    'product_id' => $product->id,
                    'quantity' => $productData['quantity'],
                    'price' => $subtotal,
                ]);
            }

            $order->update(['total_price' => $totalPrice]);

            $payment = Payment::create([
                'order_id' => $order->id,
                'nominal' => $totalPrice,
                'payment_method' => $validated['payment_method'],
                'status' => 'waiting payment',
                'transaction_time' => now(),
            ]);

            Config::$serverKey = config('services.midtrans.serverKey');
            Config::$isProduction = config('services.midtrans.isProduction');
            Config::$isSanitized = config('services.midtrans.isSanitized');
            Config::$is3ds = config('services.midtrans.is3ds');

            $unique_order_id = $order->id . '-' . time();

            $transactionDetails = [
                'order_id' => $unique_order_id,
                'gross_amount' => $totalPrice,
            ];

            $itemDetails = [];
            foreach ($validated['products'] as $productData) {
                $product = Product::find($productData['product_id']);

                $discountedPrice = $product->price;
                if ($product->discount) {
                    if ($product->discount->percentage) {
                        $discountedPrice = $product->price - ($product->price * $product->discount->percentage / 100);
                    } elseif ($product->discount->amount) {
                        $discountedPrice = $product->price - $product->discount->amount;
                    }
                }

                $itemDetails[] = [
                    'id' => $product->id,
                    'price' => $discountedPrice,
                    'quantity' => $productData['quantity'],
                    'name' => $product->name,
                ];
            }

            $customerDetails = [
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
            ];

            $params = [
                'transaction_details' => $transactionDetails,
                'item_details' => $itemDetails,
                'customer_details' => $customerDetails,
                'enabled_payments' => [$validated['payment_method']],
            ];

            $snapToken = Snap::getSnapToken($params);

            Mail::to($validated['email'])->send(new ReminderPaymentMail(
                $validated['first_name'] . ' ' . $validated['last_name'],
                $itemDetails,
                $totalPrice,
                $validated['payment_method'],
                $snapToken
            ));

            DB::commit();

            return redirect()->route('paymentPage', ['snapToken' => $snapToken]);
        } catch (Exception $e) {
            DB::rollBack();
            return back()->withErrors('Failed to place the order. Please try again.');
        }
    }
}
