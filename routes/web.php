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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Admin Controllers
|--------------------------------------------------------------------------|
*/
Route::prefix('admin')->group(function(){
	//Login Routes
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin-login-submit');
	Route::get('/login-admin', 'Auth\AdminLoginController@showLoginForm')->name('admin-login');
	
	//Movie Routes
	Route::get('/movie/create', 'AdminController@createMovie')->name('create-movie');

	Route::get('/', 'AdminController@index')->name('admin-dashboard');	
});

