<?php


use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryPostController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\Client\Body;
use App\Http\Controllers\Client\GoogleController;
use App\Http\Controllers\Client\Home;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Gmail\OrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileAddressController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileEditController;
use App\Http\Controllers\RedirectloggeInAppController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\WishListController;
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
    Route::get('/', [HomeController::class, 'home']);

    Route::get('/search', [ProductController::class, 'search'])->name('product.search');
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/products/category/{category}', [ProductController::class, 'showByCategory'])->name('products.category');
    Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.detail');
    Route::post('/add-to-cart', [ProductController::class, 'addToCart'])->name('product.addToCart');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
    Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
    Route::delete('/cart/remove/{product_id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

    Route::post('/product/{id}', [ProductController::class, 'showPost']);
    Route::post('/uploadImage', [CommentController::class, 'uploadImage']);
    Route::post('/deleteImage', [CommentController::class, 'deleteImage'])->name('deleteImage');
    Route::post('/uploadComment', [CommentController::class, 'uploadComment'])->name('uploadComment');

    Route::get('/wishlist', [WishListController::class, 'index'])->name('wishlist');
    Route::post('/wishlist/insert', [WishListController::class, 'insertWishlist'])->name('wishlist.insert');
    Route::get('/wishlist/count', [WishListController::class, 'countWishlist'])->name('wishlist.count');
});
Route::get('/post', [PostController::class, 'index']);
Route::get('/post-detail/{id}', [PostController::class, 'detail'])->name('detailPost');
Route::get('/category-post/{id}', [CategoryPostController::class, 'postByCategory'])->name('postByCategory');
Route::post('/orders/{orderId}/update-status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');
Route::post('/orders/{orderId}/update-status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');
//Dashboard
Route::prefix('/dashboard')->group(function () {
    Route::get('/', function () {
        return view('index');
    });
    Route::get('/', [Home::class, 'index']);
    Route::get('/', [Body::class, 'index']);
    Route::get('/logout', [Logout::class, 'index'])->name('logout');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [ProfileEditController::class, 'index'])->name('profile.edit');
    Route::get('/profile/edit', [ProfileEditController::class, 'edit']);
    Route::put('/profile/update', [ProfileEditController::class, 'update'])->name('profile.update');
    // show layout end display address
    Route::get('/profile/address', [ProfileAddressController::class, 'index'])->name('profile.address');
    Route::get('/profile/address/districts/{provinceId}', [ProfileAddressController::class, 'getDistricts']);
    Route::get('/profile/address/wards/{districtId}', [ProfileAddressController::class, 'getWards']);
    Route::post('/profile/address/search', [ProfileAddressController::class, 'searchAddress'])->name('profile.address.search');
    // create, update, delete address
    Route::post('/address/store', [ProfileAddressController::class, 'store'])->name('addresses.store');
    Route::get('/profile/address/{id}', [ProfileAddressController::class, 'index'])->name('addresses.edit');
    Route::put('/profile/address/{id}', [ProfileAddressController::class, 'update'])->name('addresses.update');
    Route::delete('/address/delete/{id}', [ProfileAddressController::class, 'delete'])->name('addresses.delete');
    // is_default địa chỉ mặc định
    Route::post('/addresses/{id}/default', [ProfileAddressController::class, 'setDefault'])->name('addresses.setDefault');
    // change password (đổi mật khẩu)
    Route::get('profile/change-password', [ChangePasswordController::class, 'index'])->name('change_password');
    Route::post('profile/update-password', [ChangePasswordController::class, 'update'])->name('update_password');


    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

    Route::get('/shop/{id}', [ShopController::class, 'index'])->name('shop');
    Route::get('/shop/{shopId}/category/{categoryId}', [ShopController::class, 'getProductsByCategory'])->name('shop.category');
    Route::post('/shop-follow', [ShopController::class, 'followShop']);

});
// chuyển hướng đăng ký của shop admin
Route::get('/wait', [RedirectloggeInAppController::class, 'index'])->name('wait');
Route::get('/stop-shop', [RedirectloggeInAppController::class, 'stop'])->name('stop.shop');

//Trang nhỏ
Route::get('/user-agreement', function () {
    return view('web_content.userAgreement');
});
Route::get('/condition', function () {
    return view('web_content.condition');
});
/// login google
Route::get('/auth/google', [GoogleController::class, 'googlepage']);
Route::get('/auth/google/callback', [GoogleController::class, 'googlecallback']);

require __DIR__ . '/auth.php';
