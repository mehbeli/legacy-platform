<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SaleController extends Controller
{

    public function getSalePage(Request $request, $sale_url) {
        $open_orders = \App\OpenOrder::findByURL($sale_url);
        $business = $open_orders->business()->first();
        $products = $open_orders->productStocks()->paginate(8);

        if (request()->ajax()) {
            return response()->json(view('sales.product_list')->with('business', $business->unique_id)->with('products', $products)->render());
        }

        return view('sales.new')->with('products', $products)->with('business', $business->unique_id);
    }

}
