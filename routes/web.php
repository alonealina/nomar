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

Route::get('club-nomar/admin/news_list', 'App\Http\Controllers\NomarController@news_list_admin')->name('admin.news_list')->middleware('login_admin');
Route::get('club-nomar/admin/news_regist', 'App\Http\Controllers\NomarController@news_regist')->name('admin.news_regist')->middleware('login_admin');
Route::post('club-nomar/admin/news_store', 'App\Http\Controllers\NomarController@news_store')->name('admin.news_store')->middleware('login_admin');
Route::get('club-nomar/admin/news_edit/{id}/', 'App\Http\Controllers\NomarController@news_edit')->name('admin.news_edit')->middleware('login_admin');
Route::post('club-nomar/admin/news_update', 'App\Http\Controllers\NomarController@news_update')->name('admin.news_update')->middleware('login_admin');
Route::get('club-nomar/admin/news_delete/{id}/', 'App\Http\Controllers\NomarController@news_delete')->name('admin.news_delete')->middleware('login_admin');

Route::get('club-nomar/admin/genre_list', 'App\Http\Controllers\NomarController@genre_list')->name('admin.genre_list')->middleware('login_admin');
Route::get('club-nomar/admin/genre_regist', 'App\Http\Controllers\NomarController@genre_regist')->name('admin.genre_regist')->middleware('login_admin');
Route::post('club-nomar/admin/genre_store', 'App\Http\Controllers\NomarController@genre_store')->name('admin.genre_store')->middleware('login_admin');
Route::get('club-nomar/admin/genre_edit/{id}/', 'App\Http\Controllers\NomarController@genre_edit')->name('admin.genre_edit')->middleware('login_admin');
Route::post('club-nomar/admin/genre_update', 'App\Http\Controllers\NomarController@genre_update')->name('admin.genre_update')->middleware('login_admin');
Route::get('club-nomar/admin/genre_delete/{id}/', 'App\Http\Controllers\NomarController@genre_delete')->name('admin.genre_delete')->middleware('login_admin');

// 管理側ログイン
Route::get('club-nomar/admin/login', function () { return view('login_admin'); });

Route::POST('club-nomar/admin_login', 'App\Http\Controllers\NomarController@login_admin')->name('admin.login');
Route::get('club-nomar/admin_logout', 'App\Http\Controllers\NomarController@logout')->name('admin.logout')->middleware('login_admin');