<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
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


// Route for admin side
Route::get('/admin/dashboard', [DashboardController::class, 'index']);


// CAtegories route

Route::get('admin/categories', [CategoryController::class, 'index'])->name('allCategories');
Route::post('admin/categories/add', [CategoryController::class, 'store'])->name('addCategory');
Route::get('admin/categories/add', [CategoryController::class, 'create'])->name('addCategoryForm');
Route::patch('admin/categories/{category}', [CategoryController::class, 'update']);
Route::get('admin/categories/{category}/edit', [CategoryController::class, 'edit']);
Route::delete('admin/categories/{category}', [CategoryController::class, 'destroy']);

//Individual Product page

Route::get('/product/{product}', [ProductController::class, 'show']);

Route::get('/my-orders', function () {

    return view('pages.myOrders');
});

Route::get('/my-categories', function () {
    return view('pages.filterPage');
});


// Routes for cart 
Route::get('/cart', [CartController::class, 'getCartItems']);
Route::post('/cart/add', [CartController::class, 'addProduct']);
Route::delete('/cart/{cart}', [CartController::class, 'deleteCartItem']);
Route::put('/cart/{cart}', [CartController::class, 'updateCart']);

Route::get('/products', [ProductController::class, 'search']);

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
