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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
 

Route::get('/', 'StudentController@index')->name('index');
Route::get('/add', 'StudentController@add')->name('add')->middleware('auth');
Route::get('/edit/{id}', 'StudentController@edit')->name('edit')->middleware('auth');
Route::get('/delete/{id}', 'StudentController@delete')->name('delete')->middleware('auth');
Route::get('/list', 'StudentController@list')->name('list')->middleware('auth');


Route::post('/store', 'StudentController@store')->name('store')->middleware('auth');
Route::post('/update/{id}', 'StudentController@update')->name('update')->middleware('auth');
