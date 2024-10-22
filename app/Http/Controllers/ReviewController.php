<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Exception;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, string $productId)
    {
        $request->validate([
            'rating' => 'required|integer|min:1',
            'comment' => 'required|string'
        ]);

        try {
            $user = $request->session()->get('user');
            Review::create([
                'user_id' => $user->id,
                'product_id' => $productId,
                'rating' => $request->input('rating'),
                'comment' => $request->input('comment')
            ]);

            return redirect()->route('cart')->with('success_message', 'Thank you for reviewing this product!');
        } catch (Exception $e) {
            return redirect()->back()->with('error_message', 'An error occurred: ' . $e->getMessage());
        }
    }
}
