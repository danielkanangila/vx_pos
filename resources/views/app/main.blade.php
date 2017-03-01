<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ URL::asset('assets/img/shopping_cart_accept.ico') }}">

    <title>VX-POS - {{ $title }}</title>
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
    <!-- navBar -->
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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user"></span> {{ ucfirst($userName) }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><span class="fa fa-user"></span> {{ $userName }}</a>
                                <p style="margin-top: 10px;text-align: center;margin-bottom: 15px;color: #9d9d9d;font-size: 0.8em;font-family: 'Open Sans', arial;">{{ sprintf("Role - %s", strtoupper(session('role'))) }}</p>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ url('auth/logout') }}"><span class="fa fa-power-off"></span> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End navBar -->

    <!-- SideBar -->
    <div class="body slide">
        <aside class="sidebar show perfectScrollbar">
           <div id="solso-sidebar">
               <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                   <!-- default item -->
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
                   <!-- end default item -->
                   @if(count(session("menu")) == 1)
                        @include('app.inc.part_menu')
                   @elseif(count(session("menu")) >= 2)
                        @include('app.inc.super_admin_menu')
                   <!-- dynamic item -->
                  <!-- end dynamic item -->
                   @else
                        <p style="color: #d62728;font-size: 0.9em;font-family: SansSerif;font-weight: bold;text-align: center;margin-top: 50px;">Error while trying to initialize menu items. Please contact system admin.</p>
                   @endif

               </div>
           </div>
        </aside>

        <!-- End SideBar -->
        <div class="container-fluid left-border">
            <h1 class="page-header">{{ $title }}</h1>
            <div class="row">
                @if(isset($abstract_sales_report) && count($abstract_sales_report) >= 1)
                    @include('app.inc.abstract_sales_report', ["abstract_Report"    => $abstract_sales_report])
                @endif
                <div class="col-md-12">
                    @yield("content")
                </div>
            </div>


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