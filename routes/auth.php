<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store'])->name('registerUser');

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

Route::middleware(['adminOnly'])->group(function () {


    // Route for admin side
    Route::get('/admin/dashboard', [DashboardController::class, 'index']);
    Route::get('/admin/users', [DashboardController::class, 'fetchUsers']);
    Route::get('/admin/orders', [OrderController::class, 'fetchAllOrders']);

    // CAtegories route

    Route::get('admin/categories', [CategoryController::class, 'index'])->name('allCategories');
    Route::post('admin/categories/add', [CategoryController::class, 'store'])->name('addCategory');
    Route::get('admin/categories/add', [CategoryController::class, 'create'])->name('addCategoryForm');
    Route::patch('admin/categories/{category}', [CategoryController::class, 'update']);
    Route::get('admin/categories/{category}/edit', [CategoryController::class, 'edit']);
    Route::delete('admin/categories/{category}', [CategoryController::class, 'destroy']);


    // Routes for product

    //  Route::resource('products', ProductController::class);

    Route::get('/admin/products', [ProductController::class, 'index'])->name('allProducts');
    Route::get('/admin/products/add', [ProductController::class, 'create']);
    Route::post('/admin/products/add', [ProductController::class, 'store']);
    Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit']);
    Route::patch('/admin/products/{product}', [ProductController::class, 'update']);
    Route::delete('/admin/products/{product}', [ProductController::class, 'destroy']);
});
