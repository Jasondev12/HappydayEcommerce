<?php

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

// Main page

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

Route::get('/', 'HomeController@home')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');

// Shop
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

// Cart
Route::get('/cart', 'Cartcontroller@index')->name('cart.index');
Route::post('/cart', 'Cartcontroller@store')->name('cart.store');
Route::get('/cart/reset', 'CartController@reset')->name('cart.reset');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/{product}/save', 'CartController@save')->name('cart.save');


// Save
Route::delete('/save/{product}', 'SaveController@destroy')->name('save.destroy');
Route::post('/save/{product}/cart', 'SaveController@store')->name('save.store');
Route::post('/save/{product}/fromCart', 'CartController@fromCart')->name('save.fromCart');

// Checkout
Route::get('/checkout', 'CheckoutController@checkout')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::get('/checkout/success', 'CheckoutController@success')->name('checkout.success');

// Coupons
Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');

// Orders
Route::get('/orders', 'HomeController@orders')->name('orders')->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Authentification
Auth::routes();

Route::get('/logout', function(){
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

// Route qui permet de connaître la langue active
Route::get('locale', 'LocalizationController@getLang')->name('getlang');

// Route qui permet de modifier la langue
Route::get('locale/{lang}', 'LocalizationController@setLang')->name('setlang');