<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.products', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_image_path' => 'required',
            'product_name' => 'required',
            'category' => 'required',
            'product_description' => 'max:255',
            'quantity' => 'required',
            'unit' => 'required',
            'quantity_in_stock' => 'required'

        ]);

        $product = new Product;

        if ($request->file('product_image_path')) {
            $file = $request->file('product_image_path');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/UploadedImages'), $filename);
            $product->image_path = $filename;
        }
        $product->product_name = $request->product_name;
        $product->description = $request->product_description;
        $product->category = $request->category;
        $product->unit = $request->unit;
        $product->quantity = $request->quantity;
        $product->quantity_in_stock = $request->quantity_in_stock;

        $product->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
