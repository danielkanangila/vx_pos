<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id'];

    public function customer() {
        return $this->belongsTo('App\Customer', 'customer_id');
    }

    public function deliveries() {
        return $this->hasMany('App\Delivery', 'order_id');
    }

    public function shop_stock_id() {
        return $this->belongsTo('App\Shop_stock', 'shop_stock_id');
    }

    public function sales_site() {
        return $this->belongsTo('App\Sales_site', 'sales_site_id');
    }
}
