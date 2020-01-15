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

Route::get('/','HomeController@index')->name('landing_page');
Route::get('/shop','HomeController@shop')->name('shop');
Route::get('/wishlist','HomeController@wishlist')->name('wishlist');
Route::get('/product-single','HomeController@product_single')->name('product_single');
Route::get('/cart','HomeController@cart')->name('cart');
Route::get('/checkout','HomeController@checkout')->name('checkout');
Route::get('/about','HomeController@about')->name('about');
Route::get('/blog','HomeController@blog')->name('blog');
Route::get('/contact','HomeController@contact')->name('contact');
Route::get('/blog-single','HomeController@blog_single')->name('blog_single');
 Auth::routes();

 // Route::get('/home', 'HomeController@index')->name('home');
