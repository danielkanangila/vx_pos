@extends('layouts.dashboard')
@section('title', $title)
@section('content')

<div class="row">

    <div class="col-sm-6 col-md-3">
      <div class="widget widget-stats bg-green">
        <div class="stats-icon stats-icon-lg"><i class="fa fa-users fa-fw"></i></div>
        <div class="stats-title">clients</div>
        <div class="stats-number">38</div>
        <hr>
        <div class="stats-desc">total number of clients</div>
      </div>  
    </div>  

    <div class="col-sm-6 col-md-3">
      <div class="widget widget-stats bg-blue">
        <div class="stats-icon stats-icon-lg"><i class="fa fa-puzzle-piece fa-fw"></i></div>
        <div class="stats-title">products</div>
        <div class="stats-number">24</div>
        <hr>
        <div class="stats-desc">total number of products</div>
      </div>  
    </div>  

    <div class="col-sm-6 col-md-3">
      <div class="widget widget-stats bg-purple">
        <div class="stats-icon stats-icon-lg"><i class="fa fa-file-pdf-o fa-fw"></i></div>
        <div class="stats-title">invoices</div>
        <div class="stats-number">100</div>
        <hr>
        <div class="stats-desc">total number of invoices</div>
      </div> 
    </div>    

    <div class="col-sm-6 col-md-3">
      <div class="widget widget-stats bg-grey">
        <div class="stats-icon stats-icon-lg"><i class="fa fa-money fa-fw"></i></div>
        <div class="stats-title">AMOUNT</div>
        <div class="stats-number">3432.89 $</div>
        <hr>
        <div class="stats-desc">total value of amounts</div>
      </div> 
    </div> 

@endsection