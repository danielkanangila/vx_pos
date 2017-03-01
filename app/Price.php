<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $guarded = ['id'];

    public function product() {
        return $this->belongsTo('App\Product', 'product_id');
    }

    public function currency() {
        return $this->belongsTo('App\Currency', 'currency_id');
    }

    public function invoices() {
        return $this->hasMany('App\Invoice', 'price_id');
    }
}
