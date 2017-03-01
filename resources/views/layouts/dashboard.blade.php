<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ URL::asset('assets/img/shopping_cart_accept.ico') }}">

    <title>VX-POS - @yield('title')</title>
    <!-- FONTS -->
    <link href="{{ URL::asset('assets/bower_components/bootstrap/dist/css/css.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/bower_components/bootstrap/dist/css/css_002.css') }}" rel="stylesheet">
    <!-- END FONTS -->

    <!-- CSS -->
    <link href="{{ URL::asset('assets/bower_components/jquery/dist/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/bower_components/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/bower_components/bootstrap/dist/css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/bower_components/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/bower_components/bootstrap/dist/css/design.css') }}" rel="stylesheet">
    @yield('link')
    <!-- END CSS -->  
    
    <!-- JavaScript -->
    <script src="{{ URL::asset('assets/bower_components/js/analytics.js') }}" async=""></script>
    <script></script>
    <!-- End JavaScript -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      label {
          font-size: 0.9em;
          font-weight: bold;
      }
      select {
        font-size: 0.9em;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="brand"> 
            <a class="navbar-brand" href="#"><span>VX-POS</span></a>
          </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            @if (session('sales_site'))
                <li><a href="#">{{ strtoupper(session('sales_site')) }}</a></li>
              @endif
            <li><a href="#">{{ ucfirst($userName) }}</a></li>
            <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user"></span> Profil <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><span class="fa fa-user"></span> {{ $userName }}</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ url('auth/logout') }}"><span class="fa fa-power-off"></span> Logout</a></li>
                  </ul>
              </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="body slide">
  <aside class="sidebar show perfectScrollbar">
    <div id="solso-sidebar">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading1">
          <h4 class="panel-title">
            <a href="{{ route('homeDashboard') }}" class="single-item">
              <i class="fa fa-dashboard"></i> Dashboard 
            </a>
          </h4>
        </div>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="heading2">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
            <i class="fa fa-bar-chart-o"></i> Report
            <i class="pull-right fa fa-caret-down"></i>
          </a>
        </h4>
      </div>
      
      <div aria-expanded="false" id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
        <div>
          <a href="#" class="list-group-item">Daily sales report</a>
          <a href="#" class="list-group-item">IMEI Capture</a>
          <a href="#" class="list-group-item">Physical cash count</a>
          <a href="#" class="list-group-item">POD</a>
          <a href="#" class="list-group-item">Projection and perfermance</a>
          <a href="#" class="list-group-item">SIM's selling to street agent</a>
          <a href="#" class="list-group-item">Stock report</a>
          <a href="#" class="list-group-item">Top selling device</a>
          <a href="#" class="list-group-item">VOUCHER serial delivery</a>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="heading4">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
            <i class="fa fa-money"></i> Sales
            <i class="pull-right fa fa-caret-down"></i>
          </a>
        </h4>
      </div>
      
      <div aria-expanded="false" id="collapse4" class="panel-collapse collapse @if($stat == 3) in @endif" role="tabpanel" aria-labelledby="heading4">
        <div>
          <a href="http://www.solutiisoft.com/bootstrap-sidebar/form-2.php" class="list-group-item">Order</a>
          <a href="http://www.solutiisoft.com/bootstrap-sidebar/form-3.php" class="list-group-item">Delivery</a>
          <a href="http://www.solutiisoft.com/bootstrap-sidebar/form-3.php" class="list-group-item">Invoice</a>
          <a href="http://www.solutiisoft.com/bootstrap-sidebar/form-4.php" class="list-group-item">Invoice list</a>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="heading6">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
            <i class="fa fa-database"></i> Stocks
            <i class="pull-right fa fa-caret-down"></i>
          </a>
        </h4>
      </div>
      
      <div aria-expanded="false" id="collapse6" class="panel-collapse collapse  @if($stat == 5) in @endif" role="tabpanel" aria-labelledby="heading6">
        <div>
          <a href="{{ route('getStoreProduct') }}" class="list-group-item">Store product</a>
          <a href="#" class="list-group-item">Allocations at the sale</a>
          <a href="#" class="list-group-item">Stock Movements</a>
          <a href="#" class="list-group-item">Product list</a>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="heading7">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
            <i class="fa fa-users"></i> Account
            <i class="pull-right fa fa-caret-down"></i>
          </a>
        </h4>
      </div>
      
      <div aria-expanded="false" id="collapse7" class="panel-collapse collapse  @if($stat == 6) in @endif" role="tabpanel" aria-labelledby="heading7">
        <div>
          <a href="#" class="list-group-item">Account</a>
          <a href="#" class="list-group-item">Add Customer</a>
          <a href="#" class="list-group-item">Customers list</a>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="heading7">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
            <!--
            <i class="fa fa-picture-o"></i> 
            <i class="pull-right fa fa-caret-down"></i>
            -->
          </a>
        </h4>
      </div>
      
      <div style="height: 0px;" aria-expanded="false" id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
        <div>
          
        </div>
      </div>
    </div>    
  </div>
</div>  </aside>

  <div class="container-fluid left-border"> 
    <h1 class="page-header">{{ $title }}&nbsp;&nbsp;&nbsp; @if (isset($tTSms)) <span class="badge">{{ $tTSms }}</span> @elseif(isset($tTTrans))<span class="badge">{{ $tTTrans }}</span> @else @endif</h1>
       @yield('content') 
    
  </div>  
</div>   
        

    <!-- JavaScript -->
    <script src="{{ URL::asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('assets/bower_components/jquery/dist/jquery-ui.js') }}"></script>
    @yield('script')
    <!-- End JavaScript -->
  </body>
</html>
