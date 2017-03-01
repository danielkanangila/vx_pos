<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $guarded = ['id'];

    public function delivery() {
        return $this->belongsTo('App\Delivery', 'delivery_id');
    }

    public function price() {
        return $this->belongsTo('App\Price', 'price_id');
    }
}
