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

Route::get('/', 'ProductController@index')->name('index');
Route::get('/product/{id}', 'ProductController@product')->name('product-details');



#ADMIN
Route::get('/admin', 'Admin\ProductController@index')->name('add-product');
Route::get('/admin/product/add', 'Admin\ProductController@create')->name('add-product');
Route::post('/admin/product/store', 'Admin\ProductController@store')->name('store-product');
Route::get('/admin/product/edit/{id}', 'Admin\ProductController@edit')->name('edit-product');
Route::put('/admin/product/update/{id}', 'Admin\ProductController@update')->name('update-product');

Route::delete('/admin/product/delete/{id}', 'Admin\ProductController@destroy')->name('delete-product');