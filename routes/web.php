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

//
//Route::get('articles','ArticlesController@index');
//
//
//Route::get('article/{id}','ArticlesController@show');
//
//
//Route::post('article','ArticlesController@store');
//
//
//Route::put('article/{id}','ArticlesController@store');
//
//
//Route::delete('articles','ArticlesController@destroy');

