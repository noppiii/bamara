<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Exception;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->session()->get('user');
        return view('pages.client.wishlist.wishlist', compact('user'));
    }
    public function store($userId, $productId)
    {
        try {

            $existingWishlist = Wishlist::where('user_id', $userId)
                ->where('product_id', $productId)
                ->first();

            if ($existingWishlist) {
                return redirect()->back()->with('info_message', 'Product already in wishlist!');
            }

            Wishlist::create([
                'user_id' => $userId,
                'product_id' => $productId
            ]);

            return redirect()->back()->with('success_message_create', 'Product added to wishlist successfully!');
        } catch (Exception $e) {
            return redirect()->back()->with('error_message', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($userId, $productId)
    {
        try {
            $wishlistItem = Wishlist::where('user_id', $userId)
                ->where('product_id', $productId)
                ->firstOrFail();

            $wishlistItem->delete();

            return redirect()->back()->with('success_message_create', 'Product removed from wishlist successfully!');
        } catch (Exception $e) {
            return redirect()->back()->with('error_message', 'An error occurred while removing the product from wishlist.');
        }
    }
}
