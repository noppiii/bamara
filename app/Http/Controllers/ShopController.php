<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\TagProduct;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->session()->get('user');

        $allTagProduct = TagProduct::all();
        $allCategoryProduct = CategoryProduct::all();

        $filter = $request->query('filter', 'default');

        $productsQuery = Product::query();

        switch ($filter) {
            case 'popular':
                $products = $productsQuery->withCount(['orderItems as total_sold' => function ($query) {
                    $query->select(DB::raw('SUM(quantity)'));
                }])
                    ->orderBy('total_sold', 'desc')
                    ->take(9)
                    ->get();
                break;

            case 'hot-promo':
                $products = $productsQuery->whereHas('discount', function ($query) {
                    $query->orderBy('percentage', 'desc');
                })
                    ->take(9)
                    ->get();
                break;

            default:
                $products = $productsQuery->orderBy('created_at', 'desc')
                    ->take(9)
                    ->get();
                break;
        }

        return view('pages.client.shop.shop', compact('user', 'allTagProduct', 'allCategoryProduct', 'products', 'filter'));
    }

    public function detail(string $slug)
    {
        try {
            $detailProduct = Product::with('categories', 'tags', 'discount', 'images')
                ->where('slug', $slug)
                ->firstOrFail();
            $hotProducts = Product::with('categories', 'tags', 'images')
                ->withSum('orderItems', 'quantity')
                ->orderBy('order_items_sum_quantity', 'desc')
                ->take(3)
                ->get();
            $relatedProducts = Product::with('categories', 'tags', 'images')
                ->whereHas('categories', function ($query) use ($detailProduct) {
                    $query->whereIn('category_product_id', $detailProduct->categories->pluck('id'));
                })
                ->orWhereHas('tags', function ($query) use ($detailProduct) {
                    $query->whereIn('tag_product_id', $detailProduct->tags->pluck('id'));
                })
                ->where('id', '!=', $detailProduct->id)
                ->take(12)
                ->get();
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with('error_message_not_found', 'Product data not found');
        }
        return view('pages.client.shop.detail', compact('detailProduct', 'hotProducts', 'relatedProducts'));
    }

}
