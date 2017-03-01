<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $guarded = ['id'];

    public function product() {
        return $this->belongsTo('App\Product', 'product_id');
    }

    public function warehouse() {
        return $this->belongsTo('App\Warehouse', 'warehouse_id');
    }

    public function shop_stock() {
        return $this->hasMany('App\Shop_stock', 'store_id');
    }
}
