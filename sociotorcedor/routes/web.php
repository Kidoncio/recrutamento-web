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


Route::group(['prefix' => 'socios'], function () {
    Route::get('/', 'SocioController@index');
    Route::get('/{id}', 'SocioController@show');
    Route::post('/', 'SocioController@store');
    Route::delete('/', 'SocioController@destroy');
    Route::get('/create', 'SocioController@create');
});

Route::group(['prefix' => 'clubes'], function () {
    Route::get('/', 'ClubeController@index');
    Route::get('/{id}', 'ClubeController@show');
    Route::post('/', 'ClubeController@store');
    Route::delete('/', 'ClubeController@destroy');
    Route::get('/create', 'ClubeController@create');
});