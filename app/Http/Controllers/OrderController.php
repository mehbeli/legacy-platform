<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Business;
use App\Order;
use App\OpenOrder;
use DB;
use Validator;

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

        /* Get info */
        $deliveries = DB::table('delivery_options')->get();
        $payments = DB::table('payment_options')->get();

        return view('orders.create')
                    ->with('business', $business)
                    ->with('openSales', $openSales)
                    ->with('deliveries', $deliveries)
                    ->with('payments', $payments);
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

        /* discount handling */
        $discount = 0;
        if ($inputs['discount-hid'] != 0) {
            $discount = $inputs['discount-hid'];
        }

        /* open order handling */
        $sale = null;
        if ($inputs['sale'] != null) {
            $saleCheck = OpenOrder::findByURL($inputs['sale']);
            if ($business->id == $saleCheck->business_id) {
                    $sale = $inputs['sale'];
            } else {
                return 'tahi';
            }
        }

        //dd($request->all());

        $product_list = $business->products()->whereIn('unique_id', array_keys($inputs['products']))->pluck('unique_id');
        $products = [];
        foreach ($product_list as $product) {
            $products[$product] = $inputs['products'][$product];
        }

        $order = [
            'shipping' => $inputs['delivery_charge'],
            'discount' => $discount,
            'grand_total' => $inputs['grand_total'],
            'business_id' => $business->id,
            'sale' => $sale,
            'paid' => ($inputs['paid'] === 'on') ? true : false,
            'status' => ($inputs['cpo'] === 'on') ? 'confirmed' : 'pending',
            'order_id' => uniqid(),
            'purchase_list' => json_encode($products),
            'delivery_option_id' => $inputs['delivery'],
            'payment_option_id' => $inputs['payment']
        ];

        // Validators
        $orderValidation = Validator::make($order, Order::$rules);
        $buyerValidation = Validator::make($order, Buyer::$rules);

        if ($orderValidation->fails() || $buyerValidation->fails()) {
            return $orderValidation->messages();
        }

        /*if ($order->validate( , Order::$rules) {

        }*/

        dd($request->all());
    }
}
