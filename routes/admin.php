<?php

$all_users = ['allowed_roles' => ['SUP_ADM', 'SUB_ADM']];
$sup_only = ['allowed_roles' => 'SUP_ADM'];

Route::get('/home', array_merge(['uses' => 'Admin\HomeController@index'], $all_users))->name('admin.home');

//Route::get('/', 'Admin\Auth\LoginController@showLoginForm')->name('login');

//Route::get('/login', array_merge(['uses' => 'Auth\LoginController@index'], $all_users))->name('admin.home');

/* * ********************************* */
$real_path = realpath(__DIR__) . DIRECTORY_SEPARATOR . 'admin_routes' . DIRECTORY_SEPARATOR;
include_once($real_path . 'admin_user.php');