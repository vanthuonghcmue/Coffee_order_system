<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|v
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// admin routes

require_once('admin.php');


Route::get('/', [HomeController::class, 'index'])->name('index');



Route::prefix('user')->name('user.')->group(function () {
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/showProduct', [ProductController::class, 'index'])->name('showProduct');
        Route::get('/category/{id}',[ProductController::class,'SortByCategory']) ->name('category');
    });
});

