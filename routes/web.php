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
})->name('welcome');

Route::get('user/login','UserController@getLogin')->name('user.login');
Route::post('user/login','UserController@postLogin')->name('user.login');

Route::get('user/register','UserController@getRegister')->name('user.register');
Route::post('user/register','UserController@postRegister')->name('user.register');


Route::get('user/logout','UserController@getLogout')->name('user.logout')->middleware('auth');

