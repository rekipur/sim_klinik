@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div class="card">
				    <div class="card-header primary-color-dark white-text">
				        Pengubahan Poli
				    </div>

						<div class="card-block">
							{!! Form::model($poli, ['url' => route('poli.update', $poli->id), 'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
							@include('poli._form')
							{!! Form::close() !!}
						</div>
				</div>

			</div>
		</div>
	</div>
@endsection