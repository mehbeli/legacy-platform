<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public function business() {
        return $this->belongsTo('App\Business');
    }

    public function buyer() {
        return $this->hasOne('App\User', 'buyer_id');
    }

}
