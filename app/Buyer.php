<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{

    protected $fillable = [

    ];

    private $rules = [
        'billing_name' => 'required',
        'billing_email_address' => 'required',
        'billing_phone_number' => 'required',
        'billing_address_one' => 'required',
        'billing_post_code' => 'required',
        'billing_city' => 'required',
        'billing_state' => 'required',
        'delivery_name' => 'required',
        'delivery_email_address' => 'required',
        'delivery_phone_number' => 'required',
        'delivery_address_one' => 'required',
        'delivery_post_code' => 'required',
        'delivery_city' => 'required',
        'delivery_state' => 'required',
    ];

}
