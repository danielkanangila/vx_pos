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

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('assets/bower_components/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('assets/bower_components/bootstrap/dist/css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/bower_components/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span class="xr-i">VX-</span>POS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
              @if (session('sales_site'))
                <li><a href="#" title="Site">{{ strtoupper(session('sales_site')) }}</a></li>
              @endif
            	<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user"></span> {{ $userName }} <span class="caret"></span></a>
		              <ul class="dropdown-menu">
		                <li>
                          <a href="#"><span class="fa fa-user"></span> {{ $userName }}</a>
                          <p style="margin-top: 10px;text-align: center;margin-bottom: 15px;color: #9d9d9d">{{ sprintf("Role - %s", strtoupper(session('role'))) }}</p>
                        </li>
		                <li role="separator" class="divider"></li>
		                <li><a href="{{ url('auth/logout') }}"><span class="fa fa-power-off"></span> Logout</a></li>
		              </ul>
            	</li>
          	</ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, {{ $userName }}</h1>
        <p>Welcome to your VX-POS plate forme</p>
        <p><a class="btn btn-primary btn-lg" href="{{ route('homeDashboard') }}" role="button">Go to VX-POS &raquo;</a></p>
      </div>
    </div>


    <script src="{{ URL::asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
  </body>
</html>
