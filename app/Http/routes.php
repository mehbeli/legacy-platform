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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('business', 'BusinessController');
//Route::resource('business.orders', 'OrderController');

/*Route::get('test', function () {
    return view('businesses.create')->with('notopbar', true)->with('businesses', []);
});*/
