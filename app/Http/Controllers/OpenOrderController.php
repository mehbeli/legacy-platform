<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Business;
use App\OpenOrder;

use Carbon\Carbon;

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

    public function create($businessId) {
        $business = Business::findByUniqueId($businessId);
        return view('open-orders.create')->with('business', $business);
    }

    public function store(Request $request, $businessId) {
        $all = $request->all();
        $products = [];
        foreach ($all['products_list'] as $product) {
            $dom = new \DOMDocument();
            $dom->loadHTML($product);

            if(!empty($dom)){ //if any html is actually returned
                $full_dom = $dom->getElementsByTagName("input");
                foreach ($full_dom as $node_list) {
                    $products[] = $node_list->getAttribute("value");
                }

            }
        }

        $business = Business::findByUniqueId($businessId);
        $openOrder = new OpenOrder;
        if ($openOrder->validate($request->all())) {
            $openOrder->fill($request->all());
            $openOrder->start_at = Carbon::createFromFormat('d/m/Y H:i:s A', $request->start_at)->format('Y-m-d H:i:s');
            if (!empty($request->end_at)) {
                $openOrder->end_at = Carbon::createFromFormat('d/m/Y H:i:s A', $request->end_at)->format('Y-m-d H:i:s');
            }
            $openOrder->products_list = json_encode($products_list);
            $openOrder->sale_url = str_slug($request->sale_url, '-');
            $openOrder->business()->associate($business);
            $openOrder->save();

            return redirect("/business/$businessId/open-orders")->with('success', 'New sale created.');

        } else {
            return redirect()
                        ->back()
                        ->withErrors($openOrder->errors())
                        ->withInput();
        }
    }

}
