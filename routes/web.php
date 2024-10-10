<?php

use App\Http\Controllers\AdminDashboardPenjualanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\DashboardPenjualanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TagProductController;
use App\Http\Controllers\VerifyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
Route::get('auth/google', [SocialAuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);
Route::get('/verify-email/{token}', [VerifyController::class, 'verifyEmail'])->name('verify.email');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');

Route::middleware(['role:Admin'])->group(function () {
    Route::prefix('admin')->name('admin.')
        ->group(function () {
            Route::get('/dashboard-penjualan', [DashboardPenjualanController::class, 'index'])->name('dashboard-penjualan');

            Route::get('/tag-product', [TagProductController::class, 'index'])->name('tag-product.index');
            Route::post('/tag-product/store', [TagProductController::class, 'store'])->name('tag-product.store');
            Route::put('/tag-product/{id}/update', [TagProductController::class, 'update'])->name('tag-product.update');
            Route::delete('/tag-product/{id}/destroy', [TagProductController::class, 'destroy'])->name('tag-product.destroy');

            Route::get('/category-product', [CategoryProductController::class, 'index'])->name('category-product.index');
            Route::post('/category-product/store', [CategoryProductController::class, 'store'])->name('category-product.store');
            Route::put('/category-product/{id}/update', [CategoryProductController::class, 'update'])->name('category-product.update');
            Route::delete('/category-product/{id}/destroy', [CategoryProductController::class, 'destroy'])->name('category-product.destroy');
        });
});
