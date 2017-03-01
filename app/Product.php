<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    static function rules($data = '') 
    {
    	$rules = [
    		'mark'         		=> 'required|min:2|max:50|string',
    		'model'        		=> 'required|min:2|max:50|string',
    		'product_code' 		=> 'required|min:2|max:75|string',
    		'start_serial' 		=> 'required|min:2|max:75|string|unique:stores,start_serial',
    		'end_serial'   		=> 'required|min:2|max:75|string|unique:stores,end_serial',
    		'price'        		=> 'required|regex:/^\d*(\.\d{2})?$/',
    		'quantity'     		=> 'required|integer',
    	];

    	if ($data == '') {
    		return $rules;
    	} else {
    		return $rule = array_intersect_key($rules, $data);
    	}
    }

    static function checkSerial($start_serial, $end_serial, $quantity = null)
    {
    	$x = substr($start_serial, 1);
    	$y = substr($end_serial, 1);

    	$qt_calculated = $y - $x + 1;

        if ($quantity == null) {
            # code...
        	if ($x > $y) {
        		return $r = ['end_serial' => 'Please check the start serial. The start serial can\'t be greater than end serial.'];
        	} else {
        		return $r = ['qt_calculated' => $qt_calculated];
        	}

        } else {
            if ($qt_calculated != $quantity) {
                return $r = ['quantity' => 'Please check the quantity you have entered, it\'s not match with calculated quantity using serials'];
            } else {
                return $r = ['valide' => 1];
            }
        }
    }

	public function category() {
		return $this->belongsTo('App\Category', 'category_id');
	}

	public function prices() {
		return $this->hasMany('App\Price', 'product_id');
	}

	public function stores() {
		return $this->hasMany('App\Store', 'product_id');
	}
}
