<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\ApiController;

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

Route::get('/', function () {
    return view('welcome');
});

// this is not the standard procedure to develop an api
Route::get('/api/v1/user', [ApiController::class, 'getUsers'])->name('user');
Route::get('/api/v1/posts', [ApiController::class, 'getPosts'])->name('post');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
