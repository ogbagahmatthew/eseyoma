<?php

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
Route::resource('blogs', 'BlogController');
Route::get('/blogs/article/{slug}', 'BlogController@read');
Route::get('/blogs/article/{slug}', 'BlogController@edit');
Route::resource('dashboard', 'DashboardController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
