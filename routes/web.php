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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/id', 'App\Http\Controllers\UserController@userNotFound');
Route::get('id{number?}', 'App\Http\Controllers\UserController@category');
Route::get('/form', 'App\Http\Controllers\UserController@viewForm');
Route::post('/submit', 'App\Http\Controllers\UserController@submit')->name('contact-form');
