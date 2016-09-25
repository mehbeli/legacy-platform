<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ValidationTraits;

class Product extends Model
{

    use ValidationTraits;

    protected $table = 'product_stocks';

    protected $fillable = [
        'product_name', 'product_description', 'quantity_in_stock', 'cost', 'selling_price', 'image', 'active'
    ];

    private $rules = [
        'product_name' => 'required',
        'product_description' => 'required',
        'cost' => 'required',
        'selling_price' => 'required'
    ];

    public function business() {
        return $this->belongsTo('App\Business');
    }

    public function scopeFindByUniqueId($query, $uniqueId) {
        return $query->where('unique_id', $uniqueId)->first();
    }

}
