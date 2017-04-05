@extends('admin.template.main')
@section('title', 'Login...')
@section('content')
	{!! Form::open(['route' => 'admin.auth.login', 'method' => 'POST']) !!}

		<div class="form-group">
		{!! Form::label('email', 'Correo Electronico', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'ejemplo@exampe.com']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('Password', 'Contraseña', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'XXXXXXXX']) !!}
		</div>

		<div class="form-group">
		{!! Form::submit('Ingresar', ['class'=>'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}

@endsection
