<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;

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

//Main
Route::get('/', [ProductController::class, 'random'])->name('home');


// Shop
Route::get('/shop', [ProductController::class, 'indexshop'])->name('shop.index');
Route::get('/shop/{product:slug}', [ProductController::class, 'show'])->name('shop.show');
Route::get('/cart/reset', [CartController::class, 'reset'])->name('cart.reset');
Route::delete('/cart/{product}', [CartController::class, 'destroy'])->name('cart.destroy');

// Category

Route::get('/categorys', [CategoryController::class, 'indextwo'])->name('category.index');
Route::get('/categorys/{category:slug}', [ProductController::class, 'productctg'])->name('category.show');


//cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index')->middleware('auth');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');


//checkout
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout')->middleware('auth');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/success-checkout', [CheckoutController::class, 'success'])->name('success.checkout')->middleware('auth');

//Orders
Route::get('/orders', 'HomeController@orders')->name('orders');


// Admin
Auth::routes();

Route::prefix('admin')->middleware('admin')->group(function(){
    Route::get('/', [ProductController::class, 'index'])->name('admin.index');

    // CRUD admin produit vue
    Route::get('/product', [ProductController::class, 'showadmin'])->name('admin.product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('admin.product.store');

    // CRUD admin produit avec id
    Route::delete('/product/{product}/delete', [ProductController::class, 'delete'])->name('admin.product.delete');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('admin.product.update');

    // CRUD admin categorie vue
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');

    // CRUD admin category avec id
    Route::delete('/category/{category}/delete', [CategoryController::class, 'destroy'])->name('admin.category.delete');
    Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/category/{category}/update', [CategoryController::class, 'update'])->name('admin.category.update');

    // RUD admin payment stripe
    Route::get('/payment', [CheckoutController::class, 'payment'])->name('admin.payment.index');
    Route::get('/payment/create', [CheckoutController::class, 'create'])->name('admin.payment.create');
    Route::post('/payment/store', [CheckoutController::class, 'two'])->name('admin.payment.store');

    // CRUD admin produit avec id
    Route::get('/payment/{payment}/edit', [CheckoutController::class, 'edit'])->name('admin.payment.edit');
    Route::put('/payment/{payment}/update', [CheckoutController::class, 'update'])->name('admin.payment.update');


});


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

