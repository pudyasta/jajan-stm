<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


// hanya untuk tamu yg belum auth
Route::post('/user/create', 'AuthController@postregister')->middleware('guest')->name('register');
Route::get('/user/create', 'AuthController@getRegister')->middleware('guest');
Route::post('/login', 'AuthController@postLogin');
Route::get('/login', function () {
    return redirect()->back();
});

Route::get('/logout', 'AuthController@logout')->name('logout');
