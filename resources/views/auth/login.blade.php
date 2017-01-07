<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mdb.min.css') }}">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <style type="text/css">
        body    {
              background: url(images/background_login.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    padding-top: 4%
        }
    </style>
</head>
<body  class="hidden-sn blue-skin">
<div class="container">
  <div class="row">
   
    <div class="col-sm-4">
      
    </div>
    
    <div class="col-sm-4">
<div class="card" style="background-color: #f2f2f2;color: #5d5d5d;">
    <div class="card-block">

        <!--Header-->
        <div class="text-xs-center">
            <!--<h3><i class="fa fa-lock"></i> Login:</h3>-->
            <center><img src="images/front.png" style="width: 80%;" class="img-responsive"></center>
            <div style="padding-top: 3%;"></div>
            <h3>SILAHKAN MASUK</h3>
        </div>
                {!! Form::open(['url'=>'login', 'class'=>'form-horizontal']) !!}

        <div class="md-form{{ $errors->has('email') ? ' has-error' : '' }}">
            <i class="fa fa-envelope prefix"></i>
            {!! Form::text('email', null, ['class' =>'form-control']) !!}
            {!! Form::label('email', 'Alamat Email') !!}
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="md-form{{ $errors->has('password') ? ' has-error' : '' }}">
            <i class="fa fa-lock prefix"></i>
            {!! Form::password('password', ['class'=>'form-control']) !!}
            {!! Form::label('password', 'Kata Sandi') !!}
            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
        </div>
        <hr style="background-color: blue; height: 3px;">
        <div class="text-xs-center" style="padding-bottom: 10%;">
            <button class="btn btn-indigo btn-lg btn-block">Login</button>
        </div>

                {!! Form::close() !!}
    </div>
</div>
        <div class="form-links">
          <a href="https://www.andaglos.com" target="blank" style="color: white;"> ©Copyright 2016 |  PT.Andaglos Global Teknologi.</a>
        </div>
<!--/Form without header-->
    </div>
    
    <div class="col-sm-4">
      
    </div>
    
  </div>

</div>
    <!-- Scripts -->
    <script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/tether.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
</body>
</html>
