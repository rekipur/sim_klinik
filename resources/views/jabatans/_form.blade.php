
<div class="row">
	<div class="col-md-8">
		<div class="md-form{{ $errors->has('nama_jabatan') ? ' has-error' : '' }}" >
			<i class="fa fa-envelope prefix"></i>
		{!! Form::text('nama_jabatan', null, ['class'=>'form-control']) !!}
		{!! Form::label('nama_jabatan', 'Jabatan') !!}
		{!! $errors->first('nama_jabatan', '<p class="help-block">:message</p>') !!}
		</div>
				{!! Form::submit('Simpan', ['class'=>'btn btn-success btn-sm pull-right']) !!}
	</div>
	<div class="col-md-4"></div>
</div>