<?php
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
Route::delete('/remove/{product}', 'CartController@remove')->name('cart.remove');
// Route::post('/cart/wishlist/{product}', 'CartController@wishlist')->name('cart.wishlist');

Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');


Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::get('/paypal-transaction-complete', 'PaymentController@execute');

Route::get('/guestCheckout', 'CheckoutController@index')->name('guestCheckout.index');

Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');




// Route::get('/about', 'PagesController@about');

// Route::get('/contact-us', 'PagesController@contactus');
// Route::get('/login', 'PagesController@login');
// Route::get('/my-account', 'PagesController@myaccount');

// Route::get('/single-product', 'PagesController@singleproduct');

// Route::get('/wishlist', 'PagesController@wishlist');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
