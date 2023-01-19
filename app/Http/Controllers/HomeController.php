<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $chosenCategory = Category::first();
        $chosenCategoryProducts = Product::with('category')->where('category_id', $chosenCategory->id)->paginate(5);
        $ourProducts = Product::with('category')->paginate(10);
        return view('pages.home', ['chosenCategory' => $chosenCategory, "ourProducts" => $ourProducts, "chosenCategoryProducts" => $chosenCategoryProducts]);
    }
}
