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

Route::get('about', 'PagesController@about')->name('about');
Route::get('contact', 'PagesController@contact')->name('contact');
// root を記事一覧にします
Route::get('/', 'ArticlesController@index')->name('home');
Route::resource('articles', 'ArticlesController');
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('admin/profile', function () {
    })->middleware('auth');
// $routeMiddleware に登録したキーで指定します。
