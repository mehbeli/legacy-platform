<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessConfiguration extends Model
{
    protected $table = "business_configuration";

    public function business() {
        return $this->belongsTo('App\Business');
    }

    public function businessType() {
        // not yet implement;
    }

}
