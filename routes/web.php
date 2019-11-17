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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'UserController@index');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/category', 'CategoryController@index');
Route::get('/category/add', 'CategoryController@add');
Route::post('/category/save', 'CategoryController@save');
Route::get('/category/edit/{id}', 'CategoryController@edit');
Route::post('/category/update', 'CategoryController@update');
Route::get('/category/delete/{id}', 'CategoryController@delete');

Route::get('/product', 'ProductController@index');
Route::get('/product/search', 'ProductController@search');
Route::get('/product/add', 'ProductController@add');
Route::post('/product/save', 'ProductController@save');
Route::get('/product/edit/{id}', 'ProductController@edit');
Route::post('/product/update', 'ProductController@update');
Route::get('/product/delete/{id}', 'ProductController@delete');

Route::get('/order', 'OrderController@index');
Route::get('/order/details/{id}', 'OrderController@detail');
Route::get('/order/add', 'OrderController@add');
Route::post('/order/save', 'OrderController@save');
Route::get('/order/edit/{id}', 'OrderController@edit');
Route::post('/order/update', 'OrderController@update');
Route::get('/order/delete/{id}', 'OrderController@delete');

Route::get('/account', 'AccountController@index');
Route::get('/account/search', 'AccountController@search');
Route::get('/account/add', 'AccountController@add');
Route::post('/account/save', 'AccountController@save');
Route::get('/account/edit/{id}', 'AccountController@edit');
Route::post('/account/update', 'AccountController@update');
Route::get('/account/delete/{id}', 'AccountController@delete');
