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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'LandingPageController@index')->name('landing-page');

Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
//get product attribute size
Route::get('/findProductSize', 'ShopController@findProductSize');
Route::get('/findProductPrice', 'ShopController@findProductPrice');
Route::get('/findProductId', 'ShopController@findProductId');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
// Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');



// Route::get('/about', 'PagesController@about');

// Route::get('/contact-us', 'PagesController@contactus');
// Route::get('/login', 'PagesController@login');
// Route::get('/my-account', 'PagesController@myaccount');

// Route::get('/single-product', 'PagesController@singleproduct');
// Route::get('/thank-you', 'PagesController@thankyou');
// Route::get('/wishlist', 'PagesController@wishlist');
