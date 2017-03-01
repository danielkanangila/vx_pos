<?php

namespace App\Http\Controllers\Application;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AppController extends Controller
{
    private $position = 1;
    private $userName;

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
     * @return Response
     */
    public function index()
    {
        return view('homeAdmin', [
                    'title'    => 'Home Page',
                    'userName' => $this->userName
                ]);
    }

    public function dashboard()
    {
        $abstract_sales_report = ["1" => ""];
        return view('app/main', [
                'title'    => 'Dashboard',
                'position'     => $this->position,
                'userName' => $this->userName,
                'abstract_sales_report' => $abstract_sales_report
        ]);
    }
}
