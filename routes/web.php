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
Route::get('/movies', 'MovieController@index')->name('movies');
Route::get('/movies/details/{id}', 'MovieController@show')->name('movies-details');

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
	Route::get('/movies', 'AdminMovieController@index')->name('movies-all');
	Route::post('/movie/store', 'AdminMovieController@store')->name('movies-store');
	Route::get('/movies/show/{id}', 'AdminMovieController@show')->name('movies-show');
	Route::get('/movie/create', 'AdminMovieController@create')->name('movies-create');
	Route::get('/movies/edit/{id}', 'AdminMovieController@edit')->name('movies-edit');
	Route::get('/movies/delete/{id}', 'AdminMovieController@delete')->name('movies-delete');
	Route::put('/movies/update/{id}', 'AdminMovieController@update')->name('movies-update');
	Route::delete('/movies/destroy/{id}', 'AdminMovieController@destroy')->name('moviess-destroy');

	Route::get('/', 'AdminController@index')->name('admin-dashboard');	
});

