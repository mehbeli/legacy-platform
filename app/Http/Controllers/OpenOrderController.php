<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Business;

class OpenOrderController extends Controller
{
    public function __construct() {
        $this->middleware('business');
    }

    public function index($businessId) {
        $business = Business::findByUniqueId($businessId);
        return view('open-orders.index')->with('business', $business);
    }

    public function view($salesId) {
        // implement $salesId
    }

}
