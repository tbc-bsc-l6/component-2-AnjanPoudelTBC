<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes for product

//  Route::resource('products', ProductController::class);

Route::get('/admin/products', [ProductController::class, 'index'])->name('allProducts');
Route::get('/admin/products/add', [ProductController::class, 'create']);
Route::post('/admin/products/add', [ProductController::class, 'store']);
Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit']);
Route::patch('/admin/products/{product}', [ProductController::class, 'update']);
Route::delete('/admin/products/{product}', [ProductController::class, 'destroy']);

//->middleware('adminOnly');


// CAtegories route

Route::get('/categories', [CategoryController::class, 'index'])->name('allCategories');
Route::post('/categories/add', [CategoryController::class, 'store'])->name('addCategory');
Route::get('/categories/add', [CategoryController::class, 'create'])->name('addCategoryForm');
Route::patch('/categories/{category}', [CategoryController::class, 'update']);
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit']);
Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);

//Individual Product page

Route::get('/my-products', function () {

    return view('pages.individualProduct');
});

Route::get('/my-orders', function () {

    return view('pages.myOrders');
});

Route::get('/my-categories', function () {
    return view('pages.filterPage');
});


// Routes for cart 
Route::get('/cart', function () {
    return view('pages.cart');
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
