<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use App\Models\DiscountProduct;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\TagProduct;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->session()->get('user');
//        dd($user);
        $allProducts = Product::all();
        $totalProducts = count($allProducts);
        $bestSellingProduct = Product::withSum('orderItems', 'quantity')
            ->orderBy('order_items_sum_quantity', 'desc')
            ->first();

        $mostProductWishlist = Product::withCount('wishlists')
            ->orderBy('wishlists_count', 'desc')
            ->first();

        return view('pages.admin.product.product.index', compact('user', 'allProducts', 'totalProducts', 'bestSellingProduct', 'mostProductWishlist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = $request->session()->get('user');
        $allTagProducts = TagProduct::all();
        $allCategoryProducts = CategoryProduct::all();
        $allDiscounts = DiscountProduct::all();
        return view('pages.admin.product.product.create', compact('user', 'allTagProducts', 'allCategoryProducts', 'allDiscounts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
            'category_product' => 'required|array',
            'category_product.*' => 'exists:category_products,id',
            'tag_product' => 'required|array',
            'tag_product.*' => 'exists:tag_products,id',
            'discount_id' => 'nullable|exists:discount_products,id',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $customMessages = [
            'name.required' => 'The product name is required.',
            'stock.required' => 'The stock field is required.',
            'price.required' => 'The price field is required.',
            'category_product.required' => 'Please select at least one category.',
            'tag_product.required' => 'Please select at least one tag.',
            'images.required' => 'Product images are required.',
            'images.image' => 'Each uploaded file must be a valid image.',
            'images.mimes' => 'Only jpeg, png, jpg, gif, svg formats are allowed.',
            'category_product.*.exists' => 'The selected category does not exist.',
            'tag_product.*.exists' => 'The selected tag does not exist.',
            'short_description.required' => 'The short description is required.',
            'description.required' => 'The description is required.',
        ];

        $this->validate($request, $rules, $customMessages);

        DB::beginTransaction();
        try {
            $product = Product::create([
                'name' => $request->input('name'),
                'slug' => Str::slug(Str::lower($request->input('name')), '-'),
                'stock' => $request->input('stock'),
                'price' => $request->input('price'),
                'short_description' => $request->input('short_description'),
                'description' => $request->input('description'),
                'discount_id' => $request->input('discount_id')
            ]);

            $product->categories()->attach($request->input('category_product'));
            if ($request->has('tag_product')) {
                $product->tags()->attach($request->input('tag_product'));
            }

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    if ($image->isValid()) {
                        $extension = $image->getClientOriginalExtension();
                        $imageName = rand(111, 99999) . '.' . $extension;
                        $imagePath = 'store/product/image/' . $imageName;
                        Image::make($image)->save(public_path($imagePath));

                        ProductImage::create([
                            'product_id' => $product->id,
                            'image_path' => $imageName,
                        ]);
                    }
                }
            }

            DB::commit();
            Session::flash('success_message_create', 'Product successfully saved.');
            return redirect()->route('admin.product.index');
        } catch (QueryException $e) {
            DB::rollback();
            $errorMessage = 'An error occurred. Please try again.';
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
        try {
            $product = Product::with('categories', 'tags', 'discount', 'images')->findOrFail($id);
            $allCategoryProducts = CategoryProduct::all();
            $allTagProducts = TagProduct::all();
            $allDiscounts = DiscountProduct::all();
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.product.index')->with('error_message_not_found', 'Product data not found');
        }
        return view('pages.admin.product.product.edit', compact('product', 'allCategoryProducts', 'allTagProducts', 'allDiscounts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
            'category_product' => 'required|array',
            'category_product.*' => 'exists:category_products,id',
            'tag_product' => 'required|array',
            'tag_product.*' => 'exists:tag_products,id',
            'discount_id' => 'nullable|exists:discount_products,id',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $customMessages = [
            'name.required' => 'The product name is required.',
            'stock.required' => 'The stock field is required.',
            'price.required' => 'The price field is required.',
            'category_product.required' => 'Please select at least one category.',
            'tag_product.required' => 'Please select at least one tag.',
            'images.image' => 'Each uploaded file must be a valid image.',
            'images.mimes' => 'Only jpeg, png, jpg, gif, svg formats are allowed.',
            'category_product.*.exists' => 'The selected category does not exist.',
            'tag_product.*.exists' => 'The selected tag does not exist.',
            'short_description.required' => 'The short description is required.',
            'description.required' => 'The description is required.',
        ];

        $this->validate($request, $rules, $customMessages);

        DB::beginTransaction();

        try {
            $product = Product::findOrFail($id);

            $product->update([
                'name' => $request->input('name'),
                'slug' => Str::slug(Str::lower($request->input('name')), '-'),
                'stock' => $request->input('stock'),
                'price' => $request->input('price'),
                'short_description' => $request->input('short_description'),
                'description' => $request->input('description'),
                'discount_id' => $request->input('discount_id')
            ]);

            $product->categories()->sync($request->input('category_product'));
            $product->tags()->sync($request->input('tag_product'));

            if ($request->has('removedImages')) {
                $removedImages = explode(',', rtrim($request->input('removedImages'), ','));

                foreach ($removedImages as $imageId) {
                    $existingImage = ProductImage::find($imageId);
                    if ($existingImage) {
                        $oldImagePath = public_path('store/product/image/' . $existingImage->image_path);
                        if (File::exists($oldImagePath)) {
                            File::delete($oldImagePath);
                        }
                        $existingImage->delete();
                    }
                }
            }

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $key => $image) {
                    if ($image->isValid()) {
                        $existingImage = ProductImage::where('product_id', $product->id)->skip($key)->first();

                        if ($existingImage) {
                            $oldImagePath = public_path('store/product/image/' . $existingImage->image_path);
                            if (File::exists($oldImagePath)) {
                                File::delete($oldImagePath);
                            }
                            $existingImage->delete();
                        }

                        $extension = $image->getClientOriginalExtension();
                        $imageName = rand(111, 99999) . '.' . $extension;
                        $imagePath = 'store/product/image/' . $imageName;
                        Image::make($image)->save(public_path($imagePath));

                        ProductImage::create([
                            'product_id' => $product->id,
                            'image_path' => $imageName,
                        ]);
                    }
                }
            }

            DB::commit();
            Session::flash('success_message_update', 'Product successfully updated.');
            return redirect()->route('admin.product.index');
        } catch (QueryException $e) {
            DB::rollback();
            $errorMessage = 'An error occurred. Please try again.';
            return redirect()->back()->withInput()->withErrors([$errorMessage]);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $product = Product::findOrFail($id);

            if ($product->images) {
                foreach ($product->images as $image) {
                    $imagePath = public_path('store/product/image/' . $image->image_path);
                    if (File::exists($imagePath)) {
                        File::delete($imagePath);
                    }
                    $image->delete();
                }
            }

            $product->categories()->detach();
            $product->tags()->detach();

            $product->delete();

            return redirect()->route('admin.product.index')->with('success_message_update', 'Product deleted successfully.');

        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.product.index')->with('error_message_update_details', 'Product not found.');

        } catch (Exception $e) {
            return redirect()->route('admin.product.index')->with('error_message_update_details', 'An error occurred: ' . $e->getMessage());
        }
    }

}
