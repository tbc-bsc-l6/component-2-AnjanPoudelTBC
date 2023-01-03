<?php

use App\Http\Controllers\ProductsController;
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

Route::get('/', [ProductsController::class, 'index']);

Route::get('/product/{id}', [ProductsController::class, 'show'])->where(['id' => '[0-9]{1,5}']);

Route::post('/store-form', [ProductsController::class, 'store']);

Route::patch('/product/{id}', [ProductsController::class, 'update']);

Route::delete('/product/{id}', [ProductsController::class, 'destroy']);
