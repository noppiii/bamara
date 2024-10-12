<?php

namespace App\Http\Controllers;

use App\Models\DiscountProduct;
use Exception;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->session()->get('user');

        $search = $request->input('search');
        $discountQuery = DiscountProduct::query();

        if ($search) {
            $discountQuery->where('name', 'LIKE', '%' . $search . '%')
                ->orWhereHas('products', function ($query) use ($search) {
                    $query->where('name', 'LIKE', '%' . $search . '%');
                });
        }

        $allDiscount = $discountQuery->with('products')->paginate(10);
        $totalDiscount = DiscountProduct::count();

        $biggestDiscountProduct = DiscountProduct::with('products')
            ->orderBy('percentage', 'DESC')
            ->first();

        $discountWithMostProduct = DiscountProduct::withCount('products')
            ->orderBy('products_count', 'DESC')
            ->first();

        return view('pages.admin.product.discount.index',compact('user', 'search', 'allDiscount','discountWithMostProduct','biggestDiscountProduct','totalDiscount'));
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'percentage' => 'nullable|numeric|min:0|max:100',
            'amount' => 'nullable|numeric|min:0',
        ]);

        if (is_null($validatedData['percentage']) && is_null($validatedData['amount'])) {
            return back()->withErrors(['Either percentage or amount must be provided.']);
        }

        if (!is_null($validatedData['percentage']) && !is_null($validatedData['amount'])) {
            return back()->withErrors(['You can only provide either a percentage or a fixed amount, not both.']);
        }

        try {
            DiscountProduct::create([
                'name' => $validatedData['name'],
                'percentage' => $validatedData['percentage'],
                'amount' => $validatedData['amount'],
            ]);

            return redirect()->route('admin.discount.index')->with('success_message_create', 'Discount successfully created.');
        } catch (Exception $e) {
            return back()->withErrors(['An error occurred while creating the discount: ' . $e->getMessage()]);
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'percentage' => 'nullable|numeric|min:0|max:100',
            'amount' => 'nullable|numeric|min:0',
        ]);

        if (is_null($validatedData['percentage']) && is_null($validatedData['amount'])) {
            return back()->withErrors(['Either percentage or amount must be provided.']);
        }

        if (!is_null($validatedData['percentage']) && !is_null($validatedData['amount'])) {
            return back()->withErrors(['You can only provide either a percentage or a fixed amount, not both.']);
        }

        try {
            $discount = DiscountProduct::findOrFail($id);

            $discount->update([
                'name' => $validatedData['name'],
                'percentage' => $validatedData['percentage'],
                'amount' => $validatedData['amount'],
            ]);

            return redirect()->route('admin.discount.index')->with('success_message_create', 'Discount successfully updated.');
        } catch (Exception $e) {
            return back()->withErrors(['An error occurred while updating the discount: ' . $e->getMessage()]);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $discount = DiscountProduct::findOrFail($id);

            $discount->delete();

            return redirect()->route('admin.discount.index')->with('success_message_create', 'Discount successfully deleted.');
        } catch (Exception $e) {
            return back()->withErrors(['An error occurred while deleting the discount: ' . $e->getMessage()]);
        }
    }

}
