<?php

namespace App\Http\Controllers;

use App\Models\TagProduct;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class TagProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->session()->get('user');

        $search = $request->input('search');
        $tagQuery = TagProduct::query();

        if ($search) {
            $tagQuery->where('name', 'LIKE', '%' . $search . '%')
                ->orWhereHas('products', function ($query) use ($search) {
                    $query->where('name', 'LIKE', '%' . $search . '%');
                });
        }

        $allTags = $tagQuery->with('products')->paginate(10);
        $totalTags = TagProduct::count();

        $favoriteTags = TagProduct::withCount(['products as total_sold' => function ($query) {
            $query->join('order_items', 'order_items.product_id', '=', 'products.id')
                ->select(DB::raw('SUM(order_items.quantity)'));
        }])
            ->orderBy('total_sold', 'desc')
            ->firstOrFail();

        $mostProductTags = TagProduct::withCount('products')
            ->orderBy('products_count', 'desc')
            ->firstOrFail();

        return view('pages.admin.product.tag.index', compact('allTags', 'user', 'favoriteTags', 'mostProductTags', 'totalTags',
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

        // Define custom validation messages
        $customMessages = [
            'name.required' => 'The tag name is required!',
            'name.string' => 'The tag name must be a valid string!',
            'name.max' => 'The tag name must not exceed 255 characters!',
        ];

        $this->validate($request, $rules, $customMessages);

        try {
            $tag = new TagProduct();
            $tag->create([
                'name' => $request->input('name'),
                'slug' => Str::slug(Str::lower($request->input('name')), '-'),
            ]);

            Session::flash('success_message_create', 'The tag product has been successfully saved.');
            return redirect()->route('admin.tag-product.index');

        } catch (QueryException $e) {
            $errorMessage = ($e->getCode() === 23000) ? 'A tag with this name already exists.' : 'An error occurred while saving the tag.';

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
            'name.required' => 'The tag name is required!',
            'name.string' => 'The tag name must be a valid string!',
            'name.max' => 'The tag name must not exceed 255 characters!',
        ];

        $this->validate($request, $rules, $customMessages);

        try {
            $tag = TagProduct::findOrFail($id);

            $tag->update([
                'name' => $request->input('name'),
                'slug' => Str::slug(Str::lower($request->input('name')), '-'),
            ]);

            Session::flash('success_message_update', 'The tag product has been successfully updated.');
            return redirect()->route('admin.tag-product.index');

        } catch (ModelNotFoundException $e) {
            return redirect()->back()->withErrors(['Tag not found.']);

        } catch (QueryException $e) {
            $errorMessage = ($e->getCode() === 23000) ? 'A tag with this name already exists.' : 'An error occurred while updating the tag.';
            return redirect()->back()->withInput()->withErrors([$errorMessage]);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $tag = TagProduct::findOrFail($id);

            $tag->products()->detach();

            $tag->delete();

            Session::flash('success_message_delete', 'The tag product has been successfully deleted.');
            return redirect()->route('admin.tag-product.index');

        } catch (ModelNotFoundException $e) {
            return redirect()->back()->withErrors(['Tag not found.']);

        } catch (QueryException $e) {
            $errorMessage = 'An error occurred while deleting the tag.';

            return redirect()->back()->withErrors([$errorMessage]);
        }
    }

}
