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
Route::group([ 'middleware' => 'auth'], function () {

    Route::resource('business', 'BusinessController');
    Route::resource('business.orders', 'OrderController');
    Route::resource('business.invoices', 'InvoiceController');
    Route::resource('business.products', 'ProductController');
    Route::resource('business.open-orders', 'OpenOrderController');

    // Datatables
    Route::get('/data/orders/{businessId}', 'DatatableController@getOrders');
    Route::get('/data/products/{businessId}', 'DatatableController@getProducts');
    Route::get('/data/invoices/{businessId}', 'DatatableController@getInvoices');
    Route::get('/data/open-orders/{businessId}', 'DatatableController@getOpenOrders');

});
Route::get('/404', function () {
    return view('static-page.404');
});
//Route::resource('business.orders', 'OrderController');

/*Route::get('test', function () {
    return view('businesses.create')->with('notopbar', true)->with('businesses', []);
});*/
