<?php

use Illuminate\Support\Facades\Route;

Route::get('club-nomar/', 'App\Http\Controllers\NomarController@index')->name('index');
Route::get('club-nomar/about', 'App\Http\Controllers\NomarController@about')->name('about');
Route::get('club-nomar/floor', 'App\Http\Controllers\NomarController@floor')->name('floor');
Route::get('club-nomar/cast_list', 'App\Http\Controllers\NomarController@cast_list')->name('cast_list');
Route::get('club-nomar/cast_profile', 'App\Http\Controllers\NomarController@cast_profile')->name('cast_profile');
Route::get('club-nomar/news_list', 'App\Http\Controllers\NomarController@news_list')->name('news_list');
Route::get('club-nomar/access', 'App\Http\Controllers\NomarController@access')->name('access');
Route::get('club-nomar/recruit', 'App\Http\Controllers\NomarController@recruit')->name('recruit');
