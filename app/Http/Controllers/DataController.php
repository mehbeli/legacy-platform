<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DataController extends Controller
{
    public function getProductDetails(Request $request) {
        $product_id = $request->product_id;
        return 'itik';
    }
}
