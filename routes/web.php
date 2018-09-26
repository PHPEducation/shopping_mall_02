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

Route::group(['namespace' => 'Backend', 'as' => 'admin.', 'prefix' => '/admin'], function () {
    Route::get('/', 'LoginController@index')->name('login');
    Route::post('handleLogin', 'LoginController@handleLogin')->name('handleLogin');
    Route::get('logout', 'LoginController@logout')->name('logout');
});
Route::group(['namespace' => 'Backend', 'as' => 'admin.', 'prefix' => '/admin', 'middleware' => ['web', 'checkLoginAdmin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::post('update', 'DashboardController@update')->name('update');
});
