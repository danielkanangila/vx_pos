<?php

namespace App\Http\Controllers\Application;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    private $position = 2;
    private $userName;

    /**
     * ReportController constructor.
     * @param $userName
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
    public function dailySalesReport()
    {
        return view("app/report/daily_sales_report", [
            "title" => "Daily sales report",
            'userName'   => $this->userName,
            "position"  => $this->position
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imeiCapture()
    {
        return view("app/report/imei_capture", [
            "title" => "IMEI & SIMs Report",
            'userName'   => $this->userName,
            "position"  => $this->position
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function cashCount()
    {
        return view("app/report/physical_cash_count", [
            "title" => "Physical Cash Count",
            'userName'   => $this->userName,
            "position"  => $this->position
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pod()
    {
        return view("app/report/pod", [
            "title" => "Proof of Delivery",
            'userName'   => $this->userName,
            "position"  => $this->position
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function performance()
    {
        return view("app/report/performance", [
            "title" => "Projection & Performance",
            'userName'   => $this->userName,
            "position"  => $this->position
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function stragtSim()
    {
        return view("app/report/sim_selling_stragt", [
            "title" => "SIMs Selling to Street Agents",
            'userName'   => $this->userName,
            "position"  => $this->position
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function stockToDateReport()
    {
        return view("app/report/stock_to_date_report", [
            "title" => "Stock Report",
            'userName'   => $this->userName,
            "position"  => $this->position
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function TpSellingDevice()
    {
        return view("app/report/top_selling_device", [
            "title" => "Top Selling Devices",
            'userName'   => $this->userName,
            "position"  => $this->position
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function vouchSrlDlvr()
    {
        return view("app/report/voucher_serial_delivery", [
            "title" => "Voucher Serial Delivery",
            'userName'   => $this->userName,
            "position"  => $this->position
        ]);
    }
}
