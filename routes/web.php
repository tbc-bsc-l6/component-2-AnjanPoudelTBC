<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['redirectAdmin'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');


    //->middleware('adminOnly');



    //Individual Product page

    Route::get('/product/{product}', [ProductController::class, 'show']);

    Route::get('/my-orders',  [OrderController::class, 'fetchMyOrders'])->name('myOrder');

    Route::get('/my-categories', function () {
        return view('pages.filterPage');
    });


    // Routes for cart 
    Route::get('/cart', [CartController::class, 'getCartItems']);
    Route::post('/cart/add', [CartController::class, 'addProduct']);
    Route::delete('/cart/{cart}', [CartController::class, 'deleteCartItem']);
    Route::put('/cart/{cart}', [CartController::class, 'updateCart']);
    Route::post('/cart/checkout', [CartController::class, 'checkout']);


    Route::get('/products', [ProductController::class, 'search']);
});

// Route::get('/profile', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Auth::routes(['verify' => true]);
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
