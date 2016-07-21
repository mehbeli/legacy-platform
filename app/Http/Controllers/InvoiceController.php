<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Business;

class InvoiceController extends Controller
{

    public function __construct() {
        $this->middleware('business', [ 'only' => [ 'show', 'edit', 'destroy' ] ]);
    }

    public function index($business) {
        $business = Business::find($business);
        return view('invoices.index')->with('business', $business);
    }
}
