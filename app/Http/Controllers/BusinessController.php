<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Traits\ValidationTraits;

use App\Business;

class BusinessController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('business',
            [ 'only' => 'show', 'edit', 'destroy' ]
        );
    }

    public function index()
    {
        // busines list perhaps?
    }

    public function create()
    {
        return view('businesses.create')->with([ 'notopbar' => true ]);
    }

    public function store(Request $request)
    {

        $business = new \App\Business;

        $businessinfo = [
            'business_name' => $request->business_name,
            'business_description' => $request->business_description,
        ];

        $address = [
            'first_line' => $request->first_line,
            'second_line' => $request->second_line,
            'postal_code' => $request->postal_code,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country
        ];

        $info = array_merge($businessinfo, $address);

        if ($business->validate($info)) {

            // Address first
            $business_address = new \App\BusinessAddress;
            $business_address->fill($address);
            $business_address->save();

            // Business information
            $business->business_address_id = $business_address->id;
            $business->user()->associate(\Auth::user());
            $business->fill($businessinfo);
            $business->save();

            return redirect('/business/create')->with('success', 'Yay berjaya!');
        } else {
            return redirect()
            ->back()
            ->withErrors($business->errors())
            ->withInput();
        }

        $business->business_name = $request->businessname;
        $business->business_description = $request->businessdescription;
        $business->business_address_id = $business_address->id;
        $business->user()->associate(\Auth::user());
        $business->save();

        return redirect('/business/create')->with('success', 'Yay berjaya!');
    }

    public function show($id)
    {
        return view('businesses.show')->with('business', Business::find($id));
    }

    private function destroy($id)
    {
        // Implement delete business
    }
}
