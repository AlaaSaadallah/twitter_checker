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

use Illuminate\Support\Facades\Route;

Route::get('/', 'UserModuleController@index')->name('user.login');
Route::get('register', 'UserModuleController@register')->name('user.register');
Route::post('store', 'UserModuleController@store')->name('user.account.store');
Route::post('login', 'UserModuleController@login')->name('user.account.login');
Route::get('profile', 'UserModuleController@profile')->name('user.profile');
Route::get('logout', 'UserModuleController@logout')->name('user.logout');

