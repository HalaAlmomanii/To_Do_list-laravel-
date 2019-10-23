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

Route::get('/index','TaskController@index');
Route::get('/edit/{id}','TaskController@edit');
Route::patch('/edit/{id}','TaskController@update');
Route::get('/create','TaskController@show');
Route::post('/create','TaskController@create');
Route::delete('/index/{id}','TaskController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
