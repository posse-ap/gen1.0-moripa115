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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/admin', 'AdminController@show_admin')->name('show_admin');
Route::post('/admin/add', 'AdminController@add')->name('admin/add');
Route::get('/admin/destroy/{id}', 'AdminController@destroy')->name('admin.destroy');
Route::post('/admin/destroy/{id}', 'AdminController@destroy')->name('admin.destroy');
Route::get('/admin/update/{id}', 'AdminController@update')->name('admin.update');
Route::post('/admin/update/{id}', 'AdminController@update')->name('admin.update');
Route::get('/admin/editapp', 'AdminController@editapp')->name('editapp');
Route::get('/admin/editapp/languages', 'AdminController@languages')->name('editapp.languages');
Route::get('/admin/editapp/languages/add', 'AdminController@languagesadd')->name('editapp.languages.add');
Route::post('/admin/editapp/languages/add', 'AdminController@languagesadd')->name('editapp.languages.add');

Route::get('/admin/editapp/languages/delete/{id}', 'AdminController@languagesdelete')->name('editapp.languages.delete');
Route::post('/admin/editapp/languages/delete/{id}', 'AdminController@languagesdelete')->name('editapp.languages.delete');

Route::get('/admin/editapp/languages/update/{id}', 'AdminController@languagesupdate')->name('editapp.languages.update');
Route::post('/admin/editapp/languages/update/{id}', 'AdminController@languagesupdate')->name('editapp.languages.update');

Route::get('/admin/editapp/contents/', 'AdminController@contents')->name('editapp.contents');

Route::get('/admin/editapp/contents/add', 'AdminController@contentsadd')->name('editapp.contents.add');
Route::post('/admin/editapp/contents/add', 'AdminController@contentsadd')->name('editapp.contents.add');

Route::get('/admin/editapp/contents/delete/{id}', 'AdminController@contentsdelete')->name('editapp.contents.delete');
Route::post('/admin/editapp/contents/delete/{id}', 'AdminController@contentsdelete')->name('editapp.contents.delete');

Route::get('/admin/editapp/contents/update/{id}', 'AdminController@contentsupdate')->name('editapp.contents.update');
Route::post('/admin/editapp/contents/update/{id}', 'AdminController@contentsupdate')->name('editapp.contents.update');