<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Katani Kanangila">
    <link rel="icon" href="{{ URL::asset('assets/img/shopping_cart_accept.ico') }}">

    <title>VX-POS - Login</title>

    <link href="{{ URL::asset('assets/bower_components/bootstrap/dist/css/signin_card.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/bower_components/bootstrap/dist/css/signin_style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/bower_components/font-awesome/css/font-awesome-01256.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/bootstrap/dist/css/awesome-bootstrap-checkbox.css') }}">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="logo" style="font-size: 1.5em;"><span class="xr-i">VX-</span>POS</div>
      <div class="banner">
        <h1>Welcome to <span class="xr-i">VX-</span>POS</h1>
        <h2>Log into your <span class="xr-i">VX-</span>POS account</h2>

      </div>
      @if (count($errors) > 0)
        <div class="alert alert-danger errors">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      
      <form role="form" method="POST" action="{{ url('auth/login') }}" class="form-signin">
        <h1 class="form-signin-heading">Login panel<span class="fa fa-expeditedssl fa-lp"></span></h1>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <div class="form-group ">
            <label for="sales_site" class="sr-only">sales_site</label>
            <select name="sales_site" class="form-control">
              <option value="" selected>Select your sales site</option>
              @foreach ($sales_sites as $sales_site) 
                <option value="{{ $sales_site->id }}">{{ strtoupper($sales_site->site_code) }}&nbsp;&nbsp;-&nbsp;&nbsp;{{ strtoupper($sales_site->location) }} </option>
              @endforeach
            </select>
        </div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" value="{{ old('email') }}" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <div class="checkbox checkbox-primary">
          <input id="checkbox2" class="styled" type="checkbox" checked>
          <label for="checkbox2">
              Remenber me
          </label>
        </div>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <div class="fpwd">
            <a href="{{ url('password/email') }}">Forgot Your Password?</a>
        </div>
      </form>
      
    </div> 
  </body>
</html>
