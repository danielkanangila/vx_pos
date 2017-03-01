<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $guarded =  ['id'];

    public function stores() {
        return $this->hasMany('App\Store', 'warehouse_id');
    }

    public function sales_site() {
        return $this->belongsTo('App\Sales_site', 'sales_site_id');
    }
}
