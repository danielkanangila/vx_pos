<?php
namespace App\Http\Controllers\Application\Utils;

/**
 * Created by PhpStorm.
 * User: danielKanangila
 * Date: 27/02/2017
 * Time: 21:02
 */
trait StockUtil
{
    public function autocomplete()
    {
        $table = '\App\\'.$this->inputs('table');
        $table = new $table;
        $column = $this->inputs('column');

        $availableTags = [];

        $data = $table->select($column)
            ->where($column, 'LIKE', '%'.$this->inputs('name_startWith').'%')
            ->get();

        foreach ($data as $key) {
            array_push($availableTags, $key[$column]);
        };

        return response()->json($availableTags); //json_encode($availableTags);
    }

    public function ajaxLiveValidator()
    {
        $response = '';
        $validator = \Validator::make($this->inputs(), \App\Product::rules($this->inputs()));

        if ($validator->fails()) {
            $response = $validator->errors(); //json_encode($validator->errors());

        } elseif ($this->inputs('check_serials')) {

            $response = \App\Product::checkSerial($this->inputs('start_serial'), $this->inputs('end_serial'));

        } elseif ($this->inputs('check_quantity')) {

            $response = \App\Product::checkSerial($this->inputs('start_serial'), $this->inputs('end_serial'), $this->inputs('quantity'));
        }else {

            $response = ['valide' => 1];
        };

        return response()->json($response);
    }

    public function inputs($input = '')
    {
        if ($input != '') {
            if (isset(\Input::all()[$input])) {
                return \Input::all()[$input];
            } else {
                return false;
            };
        } else {
            return \Input::all();
        };
    }
}