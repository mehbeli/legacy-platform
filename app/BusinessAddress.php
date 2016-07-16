<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessAddress extends Model
{

    protected $fillable = [
            'first_line',
            'second_line',
            'city',
            'postal_code',
            'state',
            'country'
    ];

    public function business() {
        return $this->belongsTo('App\Business');
    }

}
