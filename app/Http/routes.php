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

Route::get('/coming-soon', function () {
    return view('comingsoon');
});

Route::auth();
Route::get('nyo', function () {
    return view('static-page.not-yet-open');
});
Route::get('/home', 'HomeController@index');
Route::get('/email', function () {
    return view('mailing.usermail');
});
Route::get('/sale', function () {
    $products = \App\Product::paginate(8);
    if (Request::ajax()) {
        return Response::json(View::make('sales.products', array('products' => $products))->render());
    }
    return view('sales.index')->with(compact('products'));
});

Route::group([ 'middleware' => 'auth'], function () {

    Route::resource('business', 'BusinessController');
    Route::resource('business.orders', 'OrderController');
    Route::resource('business.invoices', 'InvoiceController');
    Route::resource('business.open-orders', 'OpenOrderController');

    // Products
    Route::post('/business/{business}/products/{product}/toggle', 'ProductController@toggle');
    Route::resource('business.products', 'ProductController');

    // Custom Route
    Route::post('/business/{business}/open-orders/toggle-status', 'OpenOrderController@postToggle');

    // Datatables
    Route::get('/data/orders/{businessId}', 'DatatableController@getOrders');
    Route::get('/data/products/{businessId}', 'DatatableController@getProducts');
    Route::get('/data/invoices/{businessId}', 'DatatableController@getInvoices');
    Route::get('/data/open-orders/{businessId}', 'DatatableController@getOpenOrders');

    // Data Fetch
    Route::get('/fetch/details/product', 'DataController@getProductDetails');
    Route::get('/fetch/sale-url', 'OpenOrderController@checkSaleUrl');

});
Route::get('/404', function () {
    return view('static-page.404');
});
//Route::resource('business.orders', 'OrderController');

/*Route::get('test', function () {
    return view('businesses.create')->with('notopbar', true)->with('businesses', []);
});*/
