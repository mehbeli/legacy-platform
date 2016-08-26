<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpenOrderSetting extends Model
{
    public function openOrder() {
        return $this->belongsTo('App\OpenOrder');
    }
}
