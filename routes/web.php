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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'movies'], function () {
    Route::get('/index', 'MovieController@index')->name('index');
    Route::get('/show/{id}', 'MovieController@show')->name('show');
    Route::get('/create', 'MovieController@create')->name('create');
    Route::post('/create', 'MovieController@store')->name('store');
    Route::get('/edit', 'MovieController@edit')->name('edit');
    Route::post('/edit', 'MovieController@update')->name('update');
    Route::get('/delete/{id}', 'MovieController@delete')->name('delete');
});
