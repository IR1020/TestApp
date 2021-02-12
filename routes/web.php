<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\TopPageController@index');

Route::get('/touroku', 'App\Http\Controllers\TourokuController@index');
Route::post('/touroku', 'App\Http\Controllers\TourokuController@touroku');

Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login', 'App\Http\Controllers\LoginController@login');

Route::get('/mypage', 'App\Http\Controllers\MyPageController@index');
