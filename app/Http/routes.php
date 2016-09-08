<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'uses' => 'HomeController@index',
    'as'   => 'home'
]);

Route::get('login', [
    'uses' => 'Auth\AuthController@getLogin',
    'as'   => 'login'
]);

Route::post('login', 'Auth\AuthController@postLogin');

Route::get('logout', [
    'uses' => 'Auth\AuthController@getLogout',
    'as'   => 'logout'
]);

Route::get('order', [
    'uses' => 'Auth\OrderController@index',
    'as'   => 'order'
]);

Route::post('order', [
    'uses' => 'Auth\OrderController@store',
    'as'   => 'order'
]);

Route::put('order/{order}', [
    'uses' => 'OrderController@update',
    'as'   => 'order'
]);