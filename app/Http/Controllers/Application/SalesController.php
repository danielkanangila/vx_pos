<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Application\Utils\FormUtil;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SalesController extends Controller
{
    private $position = 3;
    private $userName;

    /**
     * SalesController constructor.
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
    public function order()
    {
        return view("app/sales/order", [
            "title" => "Create Order",
            'userName'   => $this->userName,
            "position"  => $this->position,
            'columnSizes' => FormUtil::columnSize(),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function orderTrait()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delOrder()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delivery()
    {
        return view("app/sales/delivery", [
            "title" => "Delivery",
            'userName'   => $this->userName,
            "position"  => $this->position,
            'columnSizes' => FormUtil::columnSize(),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deliveryTrait()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stockReturn()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stockReturnTrait()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function invoice ()
    {
        return view("app/sales/invoice", [
            "title" => "Invoice",
            'userName'   => $this->userName,
            "position"  => $this->position,
            'columnSizes' => FormUtil::columnSize(),
            'currencies' => \App\Currency::lists('name', 'id')
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function invoiceTrait()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reverseInvoicing()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reverseInvoice()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function invoiceList()
    {
        return view("app/sales/invoice_list", [
            "title" => "Invoices list",
            'userName'   => $this->userName,
            "position"  => $this->position
        ]);
    }
}
