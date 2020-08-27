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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
});

//課題3
//// Route::get('XXX', 'AAAController@bbb');

//task22 課題3、6
Route::get('admin/profile/create', 'Admin\ProfileController@add')->middleware('auth');
Route::Post('admin/profile/create', 'Admin\ProfileController@create');
Route::get('admin/profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
Route::Post('admin/profile/edit', 'Admin\ProfileController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
