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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'App\Http\Controllers\Auth\AuthController@showLogin');
Route::post('/login', 'App\Http\Controllers\Auth\AuthController@login');
Route::get('/register', 'App\Http\Controllers\Auth\AuthController@showRegister');
Route::post('/register', 'App\Http\Controllers\Auth\AuthController@register');
Route::get('logout', '\App\Http\Controllers\Auth\AuthController@logout');

Route::get('/home', 'App\Http\Controllers\User\UserController@index')->middleware('UserCheck');
Route::get('/profile', 'App\Http\Controllers\User\UserController@profile')->middleware('UserCheck');
Route::post('/update/profile', 'App\Http\Controllers\User\UserController@updateProfile')->middleware('UserCheck');
Route::get('logs', 'App\Http\Controllers\HomeController@logActivity')->middleware('UserCheck');
