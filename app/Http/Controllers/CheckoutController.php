<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->session()->get('user');
        $productOrder = Cart::where('user_id', $user->id)->get();
//        dd($productOrder->toArray());
        return view('pages.client.checkout.checkout', compact('user', 'productOrder'));
    }
}
