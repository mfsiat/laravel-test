<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'PostsController@index');
Route::resource('posts', 'PostsController');
Route::resource('videos', 'VideosController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
