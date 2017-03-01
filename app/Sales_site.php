<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales_site extends Model
{
    protected $guarded  = ['id'];

    public function users() 
    {
    	return $this->hasMany('App\User', 'sales_site_id');
    }

    public function warehouse() {
        return $this->hasOne('App\Warehouse', 'sales_site_id');
    }

    public function shop_stock() {
        return $this->hasOne('App\Shop_stock', 'sales_site_id');
    }

    public function orders() {
        return $this->hasMany('App\Order', 'sales_site_id');
    }
}
