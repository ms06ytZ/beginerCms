<?php
Route::get('/direct','DirectController@index');
Route::get('/', 'IndexController@index');
Route::get('/item','ItemController@index');

