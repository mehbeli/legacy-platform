<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'discount', 'shipping', 'grand_total', 'paid', 'status', 'purchase_list', 'open_order_id', 'delivery_option_id', 'payment_option_id', 'business_id',
    ];

    public static $rules = [
        'grand_total' => 'required',
        'status' => 'required',
    ];

    public function business() {
        return $this->belongsTo('App\Business');
    }

    public function buyer() {
        return $this->hasOne('App\Buyer', 'id', 'anonymous_buyer_id');
    }

}
