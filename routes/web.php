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

$real_path = realpath(__DIR__) . DIRECTORY_SEPARATOR . 'front_routes' . DIRECTORY_SEPARATOR;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

/* * ******** Admin Auth ************ */
include_once($real_path . 'admin_auth.php');
