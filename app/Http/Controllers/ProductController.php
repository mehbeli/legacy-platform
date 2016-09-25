<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Business;
use App\Product;
use App\Helpers\UniqueID;

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
        $image = '/images/no-picture.png';
        return view('products.create')->with('business', $business)->with('imageSrc', $image);
    }

    public function store(Request $request, $businessId) {
        $business = Business::findByUniqueId($businessId);
        $product = new Product;
        if ($product->validate($request->all())) {

            $product->fill($request->all());
            $product->business()->associate($business);
            $product->quantity_in_stock = (isset($request->quantity_in_stock) || !is_null($request->quantity_in_stock)) ? $request->quantity_in_stock : 0;
            $product->tax = false;
            $product->image = $request->img;
            $product->coupon_enabled = false;
            $product->unique_id = UniqueID::generate();
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
        $product = $business->products()->where('unique_id', $productId)->first();
        $image = null;
        if (is_null($product->image)) {
            $image = '/images/no-picture.png';
        } else {
            $image = $product->image;
        }
        return view('products.show')->with('business', $business)->with('product', $product)->with('imageSrc', $image);
    }

    public function update(Request $request, $businessId, $productId) {

        $no_image = "data:image/png;base64,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";

        $business = Business::findByUniqueId($businessId);
        $product = $business->products()->where('unique_id', $productId)->first();

        if ($product->validate($request->all())) {
            $product->fill($request->all());
            $product->image = $request->img;
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

    public function toggle($businessId, $productId) {

        $product = Product::findByUniqueId($productId);
        $status = null;
        if ($product->active) {
            $product->update([ 'active' => false ]);
            $status = 'deactivated';
        } else {
            $product->update([ 'active' => true ]);
            $status = 'activated';
        }

        return redirect("/business/$businessId/products")->with('success', 'Your product have been '.$status)->with('tab', $status);

    }

}
