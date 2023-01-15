<?php

namespace App\Http\Controllers;

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
        $products = Product::paginate(5);
        $ourPicks = Product::paginate(5);
        $vegetables = Product::paginate(5);
        return view('pages.home', ['products' => $products, "ourPicks" => $ourPicks, "vegetables" => $vegetables]);
    }
}
