<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\TagProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index(Request $request)
    {
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

        return view('pages.client.shop.shop', compact('allTagProduct', 'allCategoryProduct', 'products', 'filter'));
    }

}
