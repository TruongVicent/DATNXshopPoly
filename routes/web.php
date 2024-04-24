<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\Home;
use App\Http\Controllers\Client\Product;
use App\Http\Controllers\Client\DetailHome;
use App\Http\Controllers\Client\Checkout;
use App\Http\Controllers\Client\CartHome;
use App\Http\Controllers\Client\Body;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/')->group(function (){
    Route::get('/',[Home::class,'index']);
    Route::get('/',[Body::class,'index']);
    route::get('/product',[Product::class,'index']);
    Route::get('/detail',[DetailHome::class,'index']);
    Route::get('/checkout',[Checkout::class,'index']);
    Route::get('/cart',[CartHome::class,'index']);
});
