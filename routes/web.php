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


Route::resource('/','ShoppingController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Shopping 

 Route::group(array('prefix' => 'shopping'), function()
    {
       Route::get('/', 'ShoppingController@get_shopping_products')->name('products');
       Route::post('/', 'ShoppingController@post_shopping_products')->name('products_post');

       Route::get('/contact', 'ShoppingController@shopping_client_information')->name('contact');
       
    //   Route::get('/products', 'HomeController@index')->name('products');
    });