<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Application\Utils\FormUtil;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    private $position = 5;
    private $userName;

    /**
     * AccountController constructor.
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
    public function account()
    {
        return view("app/account/account", [
            "title" => "Account",
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
    public function addAccount()
    {
        return view("app/account/add_customers", [
            "title" => "Add Customer",
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
    public function recordAccount()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function customersList()
    {
        return view("app/account/customer_list", [
            "title" => "Customers List",
            'userName'   => $this->userName,
            "position"  => $this->position
        ]);
    }
}
