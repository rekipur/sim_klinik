
<div class="row">
	<div class="col-md-8">
		<div class="md-form{{ $errors->has('nama') ? ' has-error' : '' }}" >
			<i class="fa fa-envelope prefix"></i>
				{!! Form::text('nama', null, ['class'=>'form-control']) !!}
				{!! Form::label('nama', 'Nama Poli') !!}
				{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
		</div>
				{!! Form::submit('Simpan', ['class'=>'btn btn-success btn-sm pull-right']) !!}
	</div>
	<div class="col-md-4"></div>
</div>