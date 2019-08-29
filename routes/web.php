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
Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create'); // ①
Route::get('articles/{id}', 'ArticlesController@show'); // (a)
Route::post('articles', 'ArticlesController@store');
Route::get('/', function () {
    return view('welcome');
});
Route::get('articles/{id}/edit', 'ArticlesController@edit');  // 追加
Route::patch('articles/{id}', 'ArticlesController@update');  // 追加

