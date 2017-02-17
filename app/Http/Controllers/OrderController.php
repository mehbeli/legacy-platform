<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Business;
use App\Order;
use App\OpenOrder;
use App\Buyer;
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
        if (isset($inputs['sale']) && $inputs['sale'] != null) {
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
            'paid' => (isset($inputs['paid']) && $inputs['paid'] === 'on') ? true : false,
            'status' => (isset($inputs['cpo']) && $inputs['cpo'] === 'on') ? 'confirmed' : 'pending',
            'order_id' => uniqid(),
            'purchase_list' => json_encode($products),
            'delivery_option_id' => $inputs['delivery'],
            'payment_option_id' => $inputs['payment']
        ];

        $buyer = [

            // Billing
            'billing_name' => $inputs['billing_name'],
            'billing_email_address' => $inputs['billing_email_address'],
            'billing_phone_number' => $inputs['billing_phone_number'],
            'billing_first_line' => $inputs['billing_first_line'],
            'billing_second_line' => $inputs['billing_second_line'],
            'billing_city' => $inputs['billing_city'],
            'billing_state' => $inputs['billing_state'],
            'billing_postal_code' => $inputs['billing_postal_code'],
            'billing_country' => $inputs['billing_country'],

            // Delivery
            'delivery_name' => $inputs['delivery_name'],
            'delivery_phone_number' => $inputs['delivery_phone_number'],
            'delivery_first_line' => $inputs['delivery_first_line'],
            'delivery_second_line' => $inputs['delivery_second_line'],
            'delivery_city' => $inputs['delivery_city'],
            'delivery_state' => $inputs['delivery_state'],
            'delivery_postal_code' => $inputs['delivery_postal_code'],
            'delivery_country' => $inputs['delivery_country'],

        ];

        // Validators
        $orderValidation = Validator::make($order, Order::$rules);
        $buyerValidation = Validator::make($buyer, Buyer::$rules);

        if ($orderValidation->fails() || $buyerValidation->fails()) {
            $validation = array_merge_recursive($orderValidation->messages()->toArray(), $buyerValidation->messages()->toArray());
            return redirect()->back()->withErrors($validation)->withInput();
        } else {
            $order = Order::create($order);
            $buyer = Buyer::create($buyer);
            $order->anonymous_buyer_id = $buyer->id;
            $order->save();
        }

        // if add another order return back to order form
        if ($request->aoa === 'on') {
            return redirect()->back()->with('success', 'New order have been added.');
        } else {
            return redirect('/business/'.$businessId.'/orders')->with('success', 'New order have been added.');
        }

    }
}
