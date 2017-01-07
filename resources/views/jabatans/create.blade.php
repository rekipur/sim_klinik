@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div class="card">
				    <div class="card-header primary-color-dark white-text">
				        Tambah Jabatan
				    </div>

						<div class="card-block">
							{!! Form::open(['url' => route('jabatans.store'), 'method' => 'post', 'class' => 'form-horizontal']) !!}
							@include('jabatans._form')
							{!! Form::close() !!}
						</div>
				</div>

			</div>
		</div>
	</div>
@endsection