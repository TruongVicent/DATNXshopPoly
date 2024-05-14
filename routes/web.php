<?php

use App\Http\Controllers\CategoryPostController;
use App\Http\Controllers\Client\Body;
use App\Http\Controllers\Client\CartHome;
use App\Http\Controllers\Client\Checkout;
use App\Http\Controllers\Client\DetailHome;
use App\Http\Controllers\Client\Home;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
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

Route::prefix('/')->group(function () {
    Route::get('/', [Home::class, 'index']);
    Route::get('/', [Body::class, 'index']);
    Route::get('/product', [ProductController::class, 'index',])->name('products.index');
    Route::get('/detail', [DetailHome::class, 'index']);
    Route::get('/checkout', [Checkout::class, 'index']);
    Route::get('/cart', [CartHome::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/post-detail/{id}', [PostController::class, 'detail'])->name('detailPost');
    Route::get('/category-post/{id}', [CategoryPostController::class, 'postByCategory'])->name('postByCategory');
});
