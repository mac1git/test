<?php
// app/Http/routes.php
 
// ...
Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{id}', 'ArticlesController@show');
// 追加
Route::post('articles', 'ArticlesController@store');