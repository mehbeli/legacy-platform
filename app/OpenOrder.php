<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ValidationTraits;

class OpenOrder extends Model
{

    use ValidationTraits;

    protected $fillable = [
        'title', 'descriptions', 'products_list', 'start_at', 'active', 'sale_url',
    ];

    private $rules = [
        'title' => 'required',
        'descriptions' => 'required',
        'products_list' => 'required',
        'start_at' => 'required',
        'sale_url' => 'required',
    ];

    public function business() {
        return $this->belongsTo('App\Business');
    }

    public function productStocks() {
        return $this->belongsToMany('App\Product', 'open_order_products', 'open_order_id', 'product_stock_id');
    }

    public function scopeFindByURL($query, $uniqueId) {
        return $query->where('sale_url', $uniqueId)->first();
    }

}
