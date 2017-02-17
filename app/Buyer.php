<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{

    protected $fillable = [
        'order_id',
        'user_id',
        'billing_name',
        'billing_email_address',
        'billing_phone_number',
        'billing_first_line',
        'billing_postal_code',
        'billing_city',
        'billing_state',
        'billing_country',
        'delivery_name',
        'delivery_email_address',
        'delivery_phone_number',
        'delivery_first_line',
        'delivery_postal_code',
        'delivery_city',
        'delivery_state',
        'delivery_country',
    ];

    public static $rules = [
        'billing_name' => 'required',
        'billing_email_address' => 'required',
        'billing_phone_number' => 'required',
        'billing_first_line' => 'required',
        'billing_postal_code' => 'required',
        'billing_city' => 'required',
        'billing_state' => 'required',
        'delivery_name' => 'required',
        'delivery_phone_number' => 'required',
        'delivery_first_line' => 'required',
        'delivery_postal_code' => 'required',
        'delivery_city' => 'required',
        'delivery_state' => 'required'
    ];

}
