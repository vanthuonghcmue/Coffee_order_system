<?php
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ProductController;
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
require __DIR__.'/admin.php';

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::prefix('user')->name('user.')->group(function () {
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/showProduct', [ProductController::class, 'index'])->name('showProduct');
        Route::get('/category/{id}',[ProductController::class,'SortByCategory']) ->name('category');
    });
});

require __DIR__.'/auth.php';
