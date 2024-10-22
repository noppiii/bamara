<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
                $totalPrice += $product->price * $productData['quantity'];

                $order->orderItems()->create([
                    'product_id' => $product->id,
                    'quantity' => $productData['quantity'],
                    'price' => $product->price * $productData['quantity'],
                ]);
            }

            $order->update(['total_price' => $totalPrice]);

            DB::commit();

            return redirect()->route('home')->with('success_message_create', 'Order placed successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->withErrors('Failed to place the order. Please try again.');
        }
    }
}
