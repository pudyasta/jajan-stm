<?php

use App\Http\Controllers;
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

Route::get('/', 'HomeController@index');

Route::get('/logout', 'AuthController@logout')->name('logout');

// hanya untuk tamu yg belum auth
Route::get('/reg', 'AuthController@getRegister')->middleware('guest')->name('register');
Route::post('/reg', 'AuthController@postLogin');
Route::post('/register', 'AuthController@postregister')->middleware('guest');
