<?php

use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\Admin\OrderController;
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

require __DIR__ . '/admin.php';
require __DIR__ . '/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function () {
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/showProduct', [ProductController::class, 'index'])->name('showProduct');
        Route::get('/{id}', [ProductController::class, 'SortByCategory'])->name('category');
    });
});

Route::prefix('user')->name('user.')->group(function () {
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('show');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
        Route::post('/update', [ProfileController::class, 'update'])->name('update');
        Route::get('/order', [ProfileController::class, 'showorderlist'])->name('order');
    });
});


Route::prefix('user')->name('user.')->group(function () {
    Route::prefix('cart')->name('cart.')->group(function () {
        Route::get('/', [CartController::class, 'index'])->name('show');
        Route::post('/add/{product}', [CartController::class, 'add'])->name('add');
        Route::get('/remove/{id}', [CartController::class, 'remove'])->name('delete');
        Route::post('/update/{id}', [CartController::class, 'update'])->name('update');
    });
});

Route::prefix('user')->name('user.')->group(function () {
    Route::prefix('order')->name('order.')->group(function () {
        Route::get('/store', [OrderController::class, 'store'])->name('store');
    });
});
