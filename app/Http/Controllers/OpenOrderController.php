<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Business;
use App\Product;
use App\OpenOrder;
use App\OpenOrderSetting;

use Carbon\Carbon;

class OpenOrderController extends Controller
{
    public function __construct() {
        $this->middleware('business')->except([ 'checkSaleUrl' ]);
    }

    public function index($businessId) {
        $business = Business::findByUniqueId($businessId);
        return view('open-orders.index')->with('business', $business);
    }

    public function show($businessId, $salesId) {
        $open_order = OpenOrder::where('sale_url', $salesId)->first();
        $product_list = $open_order->productStocks()->pluck('unique_id')->all();
        $business = Business::findByUniqueId($businessId);
        $open_order_setting = OpenOrderSetting::where('open_order_id', $open_order->id)->first();
        $settings = json_decode($open_order_setting->options);
        return view('open-orders.show')->with('openorder', $open_order)->with('business', $business)->with('shipping', $settings->shipping)->with('payment', $settings->payment)->with('product_list', $product_list);
    }

    public function create($businessId) {
        $business = Business::findByUniqueId($businessId);
        return view('open-orders.create')->with('business', $business);
    }

    public function update(Request $request, $businessId, $saleId) {

        $business = Business::findByUniqueId($businessId);
        $openOrder = $business->openOrders()->where('sale_url', $saleId)->first();
        $inputs = $request->all();
        if ($openOrder->validate($inputs, [
                'title' => 'required',
                'descriptions' => 'required',
                'products_list' => 'required',
                'start_at' => 'required',
                'sale_url' => 'unique:open_orders,sale_url,'.$openOrder->id.'|required',
            ])) {
            $openOrder->fill($inputs);
            $openOrder->start_at = Carbon::createFromFormat('d/m/Y H:i:s A', $request->start_at)->format('Y-m-d H:i:s');
            if (!empty($request->end_at)) {
                $openOrder->end_at = Carbon::createFromFormat('d/m/Y H:i:s A', $request->end_at)->format('Y-m-d H:i:s');
            }

            $openOrder->products_list = json_encode($request->products_list); // to be remove
            $openOrder->sale_url = str_slug($request->sale_url, '-');
            $openOrder->business()->associate($business);
            $openOrder->save();

            /* Get product id from product_stocks table */
            $product_list = Product::select('id')->where('business_id', $business->id)->whereIn('unique_id', $request->products_list)->pluck('id')->all();
            $openOrder->productStocks()->sync($product_list);

            $settings = array();
            // Shipping
            foreach ($inputs['shipping'] as $shipping) {
                switch ($shipping) {
                    case 'courier':
                        $settings['shipping'][$shipping] = [ 'price' => $inputs[$shipping.'_price'] ];
                        break;
                    case 'selfpickup':
                        $settings['shipping'][$shipping] = [ 'price' => $inputs[$shipping.'_price'] ];
                        break;
                    case 'freeshipping':
                        $settings['shipping'][$shipping] = [ 'price' => 0, 'remarks' => $inputs['freeshipping_remarks'] ];
                        break;
                }
            }

            // Payment
            foreach ($inputs['payment'] as $payment) {
                switch ($payment) {
                    case 'fpx':
                        $settings['payment'][] = 'fpx';
                        break;
                    case 'manual':
                        $settings['payment'][] = 'manual';
                        break;
                }
            }

            $setting = OpenOrderSetting::where('open_order_id', $openOrder->id)->first();
            $setting->options = json_encode($settings);
            $setting->save();

            return redirect('/business/'.$businessId.'/open-orders/'.$openOrder->sale_url)->with('success', 'Sale Information Updated');

        } else {
            return redirect()
                        ->back()
                        ->withErrors($openOrder->errors())
                        ->withInput();
        }
    }

    public function store(Request $request, $businessId) {
        //dd($request->all());
        $business = Business::findByUniqueId($businessId);
        $openOrder = new OpenOrder;
        $inputs = $request->all();
        if ($openOrder->validate($inputs)) {
            $openOrder->fill($inputs);
            $openOrder->start_at = Carbon::createFromFormat('d/m/Y H:i:s A', $request->start_at)->format('Y-m-d H:i:s');
            if (!empty($request->end_at)) {
                $openOrder->end_at = Carbon::createFromFormat('d/m/Y H:i:s A', $request->end_at)->format('Y-m-d H:i:s');
            }

            $openOrder->products_list = json_encode($request->products_list);  // to be remove
            $openOrder->sale_url = str_slug($request->sale_url, '-');
            $openOrder->business()->associate($business);
            $openOrder->save();

            /* Get product id from product_stocks table */
            $product_list = Product::select('id')->where('business_id', $business->id)->whereIn('unique_id', $request->products_list)->pluck('id')->all();
            $openOrder->productStocks()->attach($product_list);

            $settings = array();
            // Shipping
            foreach ($inputs['shipping'] as $shipping) {
                switch ($shipping) {
                    case 'courier':
                        $settings['shipping'][$shipping] = [ 'price' => $inputs[$shipping.'_price'] ];
                        break;
                    case 'selfpickup':
                        $settings['shipping'][$shipping] = [ 'price' => $inputs[$shipping.'_price'] ];
                        break;
                    case 'freeshipping':
                        $settings['shipping'][$shipping] = [ 'price' => 0, 'remarks' => $inputs['freeshipping_remarks'] ];
                        break;
                }
            }

            // Payment
            foreach ($inputs['payment'] as $payment) {
                switch ($payment) {
                    case 'fpx':
                        $settings['payment'][] = 'fpx';
                        break;
                    case 'manual':
                        $settings['payment'][] = 'manual';
                        break;
                }
            }

            $setting = new OpenOrderSetting;
            $setting->openOrder()->associate($openOrder);
            $setting->options = json_encode($settings);
            $setting->save();

            return redirect("/business/$businessId/open-orders")->with('success', 'New sale created.');

        } else {
            return redirect()
                        ->back()
                        ->withErrors($openOrder->errors())
                        ->withInput();
        }
    }

    public function postToggle(Request $request, $businessId) {
        $status = $request->status;
        $open_order = $request->sale;

        $business = Business::findByUniqueId($businessId);
        $open_sale = OpenOrder::findByURL($open_order);

        if ($business->id !== $open_sale->business_id) {
            return 'jubur lu';
        }

        if ($status == 'deactivate') {
            $open_sale->update([ 'active' => 0 ]);
        } else {
            $open_sale->update([ 'active' => 1 ]);
        }

        return response()->json([ 'status' => true ]);

    }

    public function checkSaleUrl(Request $request) {
        $openOrder = OpenOrder::where('sale_url', $request->url)->first();
        if (!is_null($openOrder)) {
            return response()->json([ 'found' => true ]);
        } else {
            return response()->json([ 'found' => false ]);
        }
    }

}
