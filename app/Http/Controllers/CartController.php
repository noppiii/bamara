<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Exception;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->session()->get('user');
        if ($user) {
            $carts = Cart::where('user_id', $user->id)->get();
        } else {
            $carts = collect();
        }
        return view('pages.client.cart.cart', compact('user', 'carts'));
    }

    public function store(Request $request, $userId, $productId)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        try {
            $existingCart = Cart::where('user_id', $userId)
                ->where('product_id', $productId)
                ->first();

            if ($existingCart) {
                return response()->json(['success' => false, 'message' => 'Product already in cart!']);
            }

            Cart::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => $request->input('quantity')
            ]);

            return redirect()->route('cart')->with('success_message', 'Product added to cart successfully!');
        } catch (Exception $e) {
            return redirect()->back()->with('error_message', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($userId, $productId)
    {
        try {
            $cartItem = Cart::where('user_id', $userId)
                ->where('product_id', $productId)
                ->firstOrFail();

            $cartItem->delete();

            return redirect()->back()->with('success_message_create', 'Product removed from cart successfully!');
        } catch (Exception $e) {
            return redirect()->back()->with('error_message', 'An error occurred while removing the product from cart.');
        }
    }
}
