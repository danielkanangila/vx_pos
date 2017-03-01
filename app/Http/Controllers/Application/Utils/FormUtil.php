<?php
/**
 * Created by PhpStorm.
 * User: danielKanangila
 * Date: 27/02/2017
 * Time: 23:01
 */

namespace App\Http\Controllers\Application\Utils;


class FormUtil
{
    public static function columnSize() {
        return  [
            'sm' => [4, 8],
            'lg' => [2, 10]
        ];
    }
}