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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario/{id}', 'UserController@show')->name('user');
Route::get('/endereco/{address}', 'AddressController@show')->name('address');
Route::get('/artigo/{post}', 'PostController@show')->name('article');
Route::get('/categoria/{category}', 'CategoryController@show')->name('category');
