<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $categories = Category::get();
        $users = User::get();
        $orders = Order::get();


        return view('pages.admin.dashboard', ["products" => $products, "categories" => $categories, "users" => $users, "orders" => $orders]);
    }
}
