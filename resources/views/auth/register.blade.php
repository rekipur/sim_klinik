@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8">

<!--Form without header-->
<div class="card">
    <div class="card-block">

        <!--Header-->
        <div class="text-xs-center">
            <h3><i class="fa fa-lock"></i> Register:</h3>
            <hr class="mt-2 mb-2">
        </div>

        <!--Body-->
        {!! Form::open(['url'=>'/register','class'=>'form-horizontal']) !!}
        <div class="md-form{{ $errors->has('name') ? ' has-error' : '' }}">
            <i class="fa fa-user prefix"></i>
            {!! Form::text('name', null, ['class'=>'form-control','length'=>'24']) !!}
            {!! Form::label('name', 'Nama') !!}
            {!! $errors->first('name','<p class="help-block">:message</p>') !!}
        </div>

        <div class="md-form{{ $errors->has('email') ? ' has-error': '' }}">
            <i class="fa fa-envelope prefix"></i>
            {!! Form::email('email', null, ['class'=>'form-control','length'=>'150']) !!}
            {!! Form::label('email', 'Alamat Email') !!}
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="md-form{{ $errors->has('password') ? ' has-error': '' }}">
            <i class="fa fa-lock prefix"></i>
            {!! Form::password('password', null, ['class'=>'form-control','length'=>'60']) !!}
            {!! Form::label('password', 'Password') !!}
            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="md-form{{ $errors->has('password_confirmation') ? ' has-error': '' }}">
            <i class="fa fa-key prefix"></i>
            {!! Form::password('password_confirmation', null, ['class'=>'form-control','length'=>'60']) !!}
            {!! Form::label('password_confirmation', 'Password Confirmation') !!}
            {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
        </div>
        <!--Footer--><br>
        <div class="modal-footer">
            <div class="options">
                <p>Sudah Punya Akun?<a href="{{ url('/login') }}"> Masuk</a></p>
            </div>
        </div>
        <div class="text-xs-center">
            <button class="btn btn-deep-purple">Registrasi</button>
        </div>
              {!! Form::close() !!}
    </div>

</div>
<!--/Form without header-->
        </div>
    <div class="col-md-2"></div>
    </div>
</div>
@endsection
