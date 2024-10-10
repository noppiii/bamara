<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->session()->get('user');

        $search = $request->input('search');
        $categoryQuery = CategoryProduct::query();

        if ($search) {
            $categoryQuery->where('name', 'LIKE', '%' . $search . '%')
                ->orWhereHas('products', function ($query) use ($search) {
                    $query->where('name', 'LIKE', '%' . $search . '%');
                });
        }

        $allCategories = $categoryQuery->with('products')->paginate(10);
        $totalCategories = CategoryProduct::count();

        $favoriteCategories = CategoryProduct::withCount(['products as total_sold' => function ($query) {
            $query->join('order_items', 'order_items.product_id', '=', 'products.id')
                ->select(DB::raw('SUM(order_items.quantity)'));
        }])
            ->orderBy('total_sold', 'desc')
            ->firstOrFail();

        $mostProductCategories = CategoryProduct::withCount('products')
            ->orderBy('products_count', 'desc')
            ->firstOrFail();

        return view('pages.admin.product.category.index', compact('allCategories', 'user', 'favoriteCategories', 'mostProductCategories', 'totalCategories',
            'search'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
        ];

        $customMessages = [
            'name.required' => 'The category name is required!',
            'name.string' => 'The category name must be a valid string!',
            'name.max' => 'The category name must not exceed 255 characters!',
        ];

        $this->validate($request, $rules, $customMessages);

        try {
            $category = new CategoryProduct();
            $category->create([
                'name' => $request->input('name'),
                'slug' => Str::slug(Str::lower($request->input('name')), '-'),
            ]);

            Session::flash('success_message_create', 'The category product has been successfully saved.');
            return redirect()->route('admin.category-product.index');

        } catch (QueryException $e) {
            $errorMessage = ($e->getCode() === 23000) ? 'A category with this name already exists.' : 'An error occurred while saving the category.';

            return redirect()->back()->withInput()->withErrors([$errorMessage]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name' => 'required|string|max:255',
        ];

        $customMessages = [
            'name.required' => 'The category name is required!',
            'name.string' => 'The category name must be a valid string!',
            'name.max' => 'The category name must not exceed 255 characters!',
        ];

        $this->validate($request, $rules, $customMessages);

        try {
            $category = CategoryProduct::findOrFail($id);

            $category->update([
                'name' => $request->input('name'),
                'slug' => Str::slug(Str::lower($request->input('name')), '-'),
            ]);

            Session::flash('success_message_update', 'The category product has been successfully updated.');
            return redirect()->route('admin.category-product.index');

        } catch (ModelNotFoundException $e) {
            return redirect()->back()->withErrors(['category not found.']);

        } catch (QueryException $e) {
            $errorMessage = ($e->getCode() === 23000) ? 'A category with this name already exists.' : 'An error occurred while updating the category.';
            return redirect()->back()->withInput()->withErrors([$errorMessage]);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $category = CategoryProduct::findOrFail($id);

            $category->products()->detach();

            $category->delete();

            Session::flash('success_message_delete', 'The category product has been successfully deleted.');
            return redirect()->route('admin.category-product.index');

        } catch (ModelNotFoundException $e) {
            return redirect()->back()->withErrors(['category not found.']);

        } catch (QueryException $e) {
            $errorMessage = 'An error occurred while deleting the category.';

            return redirect()->back()->withErrors([$errorMessage]);
        }
    }
}
