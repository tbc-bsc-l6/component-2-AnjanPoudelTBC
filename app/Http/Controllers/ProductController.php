<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $categories = Category::all();
        return view('product.addProduct', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validatedData = Validator::make($request->all(), [
            'product_image_path' => 'required',
            'product_name' => 'required|max:25',
            'category' => 'required',
            'product_description' => 'max:25',
            'quantity' => 'required',
            'unit' => 'required',
            'price' => 'required',
            'quantity_in_stock' => 'required'

        ]);

        if ($validatedData->fails()) {
            return redirect('products/add')
                ->withErrors($validatedData)
                ->withInput();
        }

        $product = new Product;

        if ($request->file('product_image_path')) {
            $file = $request->file('product_image_path');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/UploadedImages'), $filename);
            $product->image_path = $filename;
        }
        $product->product_name = $request->product_name;
        $product->description = $request->product_description;
        $product->category_id = $request->category;
        $product->unit = $request->unit;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->quantity_in_stock = $request->quantity_in_stock;

        $product->save();

        return redirect()->route('allProducts')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $category_id = $product->category->id;
        $similarProducts = Category::findOrFail($category_id)->product->except($product->id)->take(20);
        $similarProducts = $similarProducts->random(min($similarProducts->count(), 5));


        return view('pages.individualProduct', ['product' => $product, 'similarProducts' => $similarProducts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('product.editProduct', ['product' => $product, "categories" => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $validatedData = Validator::make($request->all(), [

            'product_name' => 'required|max:25',
            'category' => 'required',
            'product_description' => 'max:25',
            'quantity' => 'required',
            'unit' => 'required',
            'price' => 'required',
            'quantity_in_stock' => 'required'

        ]);

        if ($validatedData->fails()) {
            return redirect()->back()
                ->withErrors($validatedData)
                ->withInput();
        }
        $filename = $request->hidden_product_image_path;

        if ($request->product_image_path != '') {
            $file = $request->file('product_image_path');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/UploadedImages'), $filename);
        }


        //  $product->update($request->all());
        //Update with mass assignment
        $product->image_path = $filename;
        $product->product_name = $request->product_name;
        $product->description = $request->product_description;
        $product->category_id = $request->category;
        $product->unit = $request->unit;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->quantity_in_stock = $request->quantity_in_stock;

        $product->save();

        return redirect()->route('allProducts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)

    {

        $product->delete();
        return redirect()->route('allProducts')
            ->with('success', 'Product deleted successfully');
    }
}
