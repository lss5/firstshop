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

Route::get('/', 'HomeController@index')->name('home');

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
});
