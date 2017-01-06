<div class="form-group{{ $errors->has('nama_jabatan') ? ' has-error' : '' }}" >
	{!! Form::label('nama_jabatan', 'Jabatan', ['class'=>'col-md-1 control-label']) !!}
	<div class="col-md-5">
		{!! Form::text('nama_jabatan', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama_jabatan', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-5 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary btn-block']) !!}
	</div>
</div>