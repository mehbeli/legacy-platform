<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'grand_total', 'paid', 'status', 'purchase_list', 'open_order_id'
    ];

    private $rules = [
        'grand_total' => 'required',
        'status' => 'required',
    ];

    public function business() {
        return $this->belongsTo('App\Business');
    }

    public function buyer() {
        return $this->hasOne('App\User', 'buyer_id');
    }

}
