<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = product::all();
        return view('product/showAll', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     "productName" => "required",
        //     "price" => "required|integer",
        //     "company" => "required",
        // ]);

        product::create([
            "productName" => $request->productName,
            "price" => $request->price,
            "company" => $request->company,
        ]);

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        $data = product::find($product->id);
        return view('product/showSingle', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        $data = product::find($product->id);
        return view('product/editProduct', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $data = product::where("id",$id)
            ->update([
                "productName" => $request->productName,
                "price" => $request->price,
                "company" => $request->company,
            ]);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        product::destroy($product->id);
        return redirect()->route('product.index');
    }
}
