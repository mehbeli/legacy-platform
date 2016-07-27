<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Business;
use App\Product;

class ProductController extends Controller
{
    public function __construct() {
        $this->middleware('business');
    }

    public function index($businessId) {
        // show order list belongs to business
        $business = Business::findByUniqueId($businessId);
        return view('products.index')->with('business', $business);
    }

    public function create($businessId) {
        $business = Business::findByUniqueId($businessId);
        return view('products.create')->with('business', $business);
    }

    public function store(Request $request, $businessId) {
        $business = Business::findByUniqueId($businessId);
        $product = new Product;
        if ($product->validate($request->all())) {

            $product->fill($request->all());
            $product->business()->associate($business);
            $product->quantity_in_stock = (isset($request->quantity_in_stock) || !is_null($request->quantity_in_stock)) ? $request->quantity_in_stock : 0;
            $product->tax = false;
            $product->coupon_enabled = false;
            $product->unique_id = uniqid();
            $product->save();

            return redirect("/business/$businessId/products")->with('success', 'New product added.');

        } else {
            return redirect()
            ->back()
            ->withErrors($product->errors())
            ->withInput();
        }
    }

    public function show($businessId, $productId) {
        $business = Business::findByUniqueId($businessId);
        $product = $business->products()->where('id', $productId)->first();
        return view('products.show')->with('business', $business)->with('product', $product);
    }

    public function update(Request $request, $businessId, $productId) {
        $business = Business::findByUniqueId($businessId);
        $product = Product::findByUniqueId($productId);

        if ($product->validate($request->all())) {

            $product->fill($request->all());
            $product->quantity_in_stock = (isset($request->quantity_in_stock) || !is_null($request->quantity_in_stock)) ? $request->quantity_in_stock : 0;
            $product->save();

            return redirect("/business/$businessId/products")->with('success', 'Product Information Updated.');

        } else {
            return redirect()
            ->back()
            ->withErrors($product->errors())
            ->withInput();
        }

    }

    public function destroy($businessId, $productId) {
        Product::findByUniqueId($productId)->delete();
        return redirect("/business/$businessId/products")->with('success', 'Product has been deleted.');
    }

}
