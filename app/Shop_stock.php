<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop_stock extends Model
{
    protected $guarded  = ['id'];

    public function sales_site() {
        return $this->belongsTo('App\Sales_site', 'sales_site_id');
    }

    public function store() {
        return $this->belongsTo('App\Store', 'store_id');
    }

    public function order() {
        return $this->hasMany('App\Order', 'shop_stock_id');
    }
}
