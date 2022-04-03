<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\NomarController@index')->name('index');
Route::get('about', 'App\Http\Controllers\NomarController@about')->name('about');
Route::get('floor', 'App\Http\Controllers\NomarController@floor')->name('floor');
Route::get('cast_list', 'App\Http\Controllers\NomarController@cast_list')->name('cast_list');
Route::get('news_list', 'App\Http\Controllers\NomarController@news_list')->name('news_list');
Route::get('access', 'App\Http\Controllers\NomarController@access')->name('access');
