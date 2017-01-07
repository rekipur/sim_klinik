@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<!--Panel-->
				<div class="card">
				    <div class="card-header primary-color-dark white-text">
				        Daftar Poli
				    </div>
				    <style type="text/css">
				    	thead{
				    		background-color: rgb(76, 175, 80);
				    		color: white;
							width: 444.7px;
				    	}
				    </style>
				    <div class="card-block">
						<div class="table-responsive">
							<p> <a href="{{ route('poli.create') }}" class="btn btn-info btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Poli</a></p>
							{!! $html->table(['class'=>'table table-bordered table-striped display nowrap','cellspacing'=>'0','width'=>'100%']) !!}
						</div>
				    </div>
				</div>
				<!--/.Panel-->
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	{!! $html->scripts() !!}
@endsection