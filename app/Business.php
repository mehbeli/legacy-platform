<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ValidationTraits;

class Business extends Model
{

    use ValidationTraits;

    protected $fillable = [
            'business_name',
            'business_description'
    ];

    private $rules = [
        'business_name' => 'required',
        'business_description' => 'required',
        'first_line' => 'required',
        'city' => 'required',
        'postal_code' => 'required',
        'state' => 'required',
        'country' => 'required',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function owner() {
        return User::find($this->user_id)->name;
    }

    public function businessName() {
        return $this->business_name;
    }

    public function businessDescription() {
        return $this->business_description;
    }

    public function businessAddress() {
        return $this->hasOne('App\BusinessAddress');
    }

    public function orders() {
        return $this->hasMany('App\Order');
    }

    public function products() {
        return $this->hasMany('App\Product');
    }

    public function businessConfiguration() {
        return $this->hasOne('App\BusinessConfiguration');
    }

}
