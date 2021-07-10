<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WhishlistController;
use Illuminate\Support\Facades\Route;



//Route::get('/', function () {
//    $banners = \App\Models\Banner::all();
//    return view('welcome')->with([
//        'banners' => $banners
//    ]);
//});


Route::get('user/auth', [IndexController::class, 'auth'])->name('user.auth');

Route::get('/', [IndexController::class, 'home'])->name('homepage');
Route::get('/home/shop', [IndexController::class, 'shop'])->name('shop');


Auth::routes();
Route::get('/admin',[AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function (){
    Route::resource('users', UserController::class)->only('index', 'create', 'store', 'show', 'edit', 'destroy');
    Route::resource('banner', BannerController::class)->only('index', 'create', 'store', 'show', 'edit', 'destroy');
    Route::resource('brand', BrandController::class)->only('index', 'create', 'store', 'show', 'edit', 'destroy');
    Route::resource('product', ProductController::class)->only('index', 'create', 'store', 'show', 'edit', 'destroy');
    Route::resource('category', CategoryController::class)->only('index', 'create', 'store', 'show', 'edit', 'destroy');
    Route::post('category/{id}/child', [CategoryController::class, 'getChildByParentID']);

});


Route::get('whishlist/page', [WhishlistController::class, 'index'])->name('whishlist');
Route::post('whishlist/store', [WhishlistController::class, 'whishlistStore'])->name('whishlist.store');
Route::post('whishlist/move', [WhishlistController::class, 'moveToCart'])->name('whishlist.movetocart');


Route::resource('coupon', CouponController::class)->only('index', 'create', 'store', 'show', 'edit', 'destroy');
Route::get('cart/coupon', [CartController::class, 'couponAdd'])->name('coupon.add');



Route::resource('shipping', ShippingController::class)->only('index', 'create', 'store', 'show', 'edit', 'destroy');
Route::get('shippping/index', [ShippingController::class, 'shippingPage'])->name('shippingpage');


Route::get('cart/dashboard', [CartController::class, 'dashboard'])->name('cart.dashboard');

Route::get('cart/index', [CartController::class, 'index'])->name('cart.index');
Route::post('cart/store',[CartController::class,'cartStore'])->name('cart.store');
Route::post('cart/delete',[CartController::class,'cartDelete'])->name('cart.delete');
Route::post('cart/update',[CartController::class,'cartUpdate'])->name('cart.update');

  Route::get('checkout/billing', [CheckoutController::class, 'checkoutBilling'])->name('checkoutbilling');
Route::get('checkout/shipping', [CheckoutController::class, 'checkoutShipping'])->name('checkoutshipping');
Route::get('checkout/payment', [CheckoutController::class, 'checkoutPayment'])->name('checkoutpayment');
Route::get('checkout/review', [CheckoutController::class, 'checkoutReview'])->name('checkoutreview');
Route::get('checkout/complete', [CheckoutController::class, 'checkoutComplete'])->name('checkoutcomplete');




Route::get('product-category/{slug}', [ProductCategoryController::class, 'getproductcategory'])->name('getproductcategory');
Route::get('product-detail/{slug}', [ProductCategoryController::class, 'productDetail'])->name('productdetail');


Route::prefix('user')->group(function (){
    Route::get('dashboard', [IndexController::class, 'dashboard'])->name('user.dashboard');
    Route::get('address', [IndexController::class, 'address'])->name('user.address');
    Route::get('accountdetails', [IndexController::class, 'accountdetails'])->name('user.accountdetails');
    Route::get('order', [IndexController::class, 'order'])->name('user.order');
});
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
