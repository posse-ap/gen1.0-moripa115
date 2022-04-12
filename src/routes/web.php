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

Route::get('/', 'ProductsController@index')->name('top');
Route::post('/add', 'ProductsController@add')->name('add');
Route::get('/news', 'ProductsController@news')->name('news');
Route::get('/news/{id}', 'ProductsController@detail')->name('detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
