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

Route::get('/', 'WorkController@index');
Route::get('/create', 'WorkController@create');
Route::post('/create', 'WorkController@store');
Route::get('/manage', 'WorkController@manage');
Route::get('/edit', 'WorkController@edit');
Route::post('/edit', 'WorkController@update');
Route::get('/delete', 'WorkController@delete');
Route::post('/delete', 'WorkController@destroy');
Route::post('/ajax', 'WorkController@ajax');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
