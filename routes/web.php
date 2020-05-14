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

Auth::routes(['register' => false]);

/* Backend */
Route::middleware(['auth'])->prefix('admin')->namespace('Backend')->name('admin.')->group(function(){
    Route::get('/', 'DashboardController@index')->name('index');

    // Products
    Route::get('/products', 'ProductController@index')->name('product.index');
    Route::get('/products/create', 'ProductController@create')->name('product.create');
    Route::post('/products/store', 'ProductController@store')->name('product.store');
    Route::get('/products/{product}', 'ProductController@show')->name('product.show');
    Route::get('/products/{product}/edit', 'ProductController@edit')->name('product.edit');
    Route::put('/products/{product}', 'ProductController@update')->name('product.update');
    Route::delete('/products/{product}', 'ProductController@destroy')->name('product.destroy');

    // Categories
    Route::get('/categories', 'CategoryController@index')->name('category.index');
    Route::get('/categories/create', 'CategoryController@create')->name('category.create');
    Route::post('/categories/store', 'CategoryController@store')->name('category.store');
    Route::get('/categories/{category}', 'CategoryController@show')->name('category.show');
    Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('category.edit');
    Route::put('/categories/{category}', 'CategoryController@update')->name('category.update');
    Route::delete('/categories/{category}', 'CategoryController@destroy')->name('category.destroy');
});

/* Frontend */

Route::get('/', 'HomeController@index')->name('home');
Route::get('/{category}', 'ShopController@category')->name('category');
Route::get('/{category}/{product}', 'ShopController@product')->name('product');
