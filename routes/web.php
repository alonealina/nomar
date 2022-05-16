<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\NomarController@index')->name('index');
Route::get('about', 'App\Http\Controllers\NomarController@about')->name('about');
Route::get('floor', 'App\Http\Controllers\NomarController@floor')->name('floor');
Route::get('cast_list', 'App\Http\Controllers\NomarController@cast_list')->name('cast_list');
Route::get('cast_profile', 'App\Http\Controllers\NomarController@cast_profile')->name('cast_profile');
Route::get('news_list', 'App\Http\Controllers\NomarController@news_list')->name('news_list');
Route::get('access', 'App\Http\Controllers\NomarController@access')->name('access');
Route::get('recruit', 'App\Http\Controllers\NomarController@recruit')->name('recruit');
