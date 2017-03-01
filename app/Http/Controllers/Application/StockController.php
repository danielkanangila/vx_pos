<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Application\Utils\FormUtil;
use App\Http\Controllers\Application\Utils\StockUtil;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StockController extends Controller
{
    private $position = 4;
    private $userName;

    use StockUtil;

    /**
     * StocksController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        if (isset(\Auth::user()->name))
            $this->userName = \Auth::user()->name;
        else
            return redirect('auth/logout');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProduct()
    {
        return view("app/stocks/store_product", [
            "title" => "Add Product",
            'userName'   => $this->userName,
            "position"  => $this->position,
            'columnSizes' => FormUtil::columnSize(),
            'categories' => \App\Category::lists('name', 'id'),
            'currencies' => \App\Currency::lists('name', 'id')
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveProduct()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productAllocation()
    {
        return view("app/stocks/allocations", [
            "title" => "Allocate Product to Sale",
            'userName'   => $this->userName,
            "position"  => $this->position,
            'columnSizes' => FormUtil::columnSize()
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pAllocation()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stockMovement()
    {
        return view("app/stocks/stock_movements", [
            "title" => "Stocks Movements",
            'userName'   => $this->userName,
            "position"  => $this->position
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productList()
    {
        return view("app/stocks/product_list", [
            "title" => "Products List",
            'userName'   => $this->userName,
            "position"  => $this->position
        ]);
    }
}
