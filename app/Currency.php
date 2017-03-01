<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $guarded = ['id'];

    public function prices() {
        return $this->hasMany('App\Price', 'currency_id');
    }
}
