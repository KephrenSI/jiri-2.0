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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
Route::get('/dashboard', 'DashboardController@main');
=======

>>>>>>> f0368d4f93009ac2471e7561833c53c241222d02
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
