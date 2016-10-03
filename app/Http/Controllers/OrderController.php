<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Business;
use App\Order;

class OrderController extends Controller
{
    public function __construct() {
        $this->middleware('business');
    }

    public function index($business) {
        // show order list belongs to business
        $business = Business::findByUniqueId($business);
        return view('orders.index')->with('business', $business);

    }

    public function create($business) {
        $business = Business::findByUniqueId($business);
        $openSales = $business->openOrders()->get();
        return view('orders.create')->with('business', $business)->with('openSales', $openSales);
    }

    public function show($business, $orderId) {
        // show specific order based on business
        $order = Order::findByUniqueId($orderId);
        if (!isset($order->business_id) || !($order->business_id === $business)) {
            return '404';
        }
        $business = Business::findByUniqueId($business);

        return view('orders.show')->with('business', $business)->with('order', $order);
    }

    public function store(Request $request, $businessId) {
        $business = Business::findByUniqueId($businessId);

        $order = new Order;
        $inputs = $request->all();
        //$
        dd($request->all());
    }
}
