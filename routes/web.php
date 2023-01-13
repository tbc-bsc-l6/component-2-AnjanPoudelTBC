<?php

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

Route::get('/', function () {
    return view('pages.home', ['products' => Product::all()]);
})->name('home');

// Routes for product

//  Route::resource('products', ProductController::class);

Route::get('/products', [ProductController::class, 'index'])->name('allProducts');
Route::get('/products/add', [ProductController::class, 'create'])->middleware('adminOnly');
Route::post('/products/add', [ProductController::class, 'store'])->middleware('adminOnly');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->middleware('adminOnly');
Route::patch('/products/{product}', [ProductController::class, 'update'])->middleware('adminOnly');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->middleware('adminOnly');



//Individual Product page

Route::get('/my-products', function () {

    return view('pages.individualProduct');
});

Route::get('/my-orders', function () {

    return view('pages.myOrders');
});

Route::get('/categories', function () {
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
