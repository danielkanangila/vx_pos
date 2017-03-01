<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $guarded = ['id'];

    public function order() {
        return $this->belongsTo('App\Order', 'order_id');
    }

    public function invoice() {
        return $this->hasOne('App\Invoice', 'delivery_id');
    }
}
