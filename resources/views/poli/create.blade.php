@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div class="card">
				    <div class="card-header primary-color-dark white-text">
				        Tambah Poli
				    </div>

						<div class="card-block">
							{!! Form::open(['url' => route('poli.store'), 'method' => 'post', 'class' => 'form-horizontal']) !!}
							@include('poli._form')
							{!! Form::close() !!}
						</div>
				</div>

			</div>
		</div>
	</div>
@endsection