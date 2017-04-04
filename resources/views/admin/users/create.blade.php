@extends('admin.template.main')
@section('title', 'Nuevo Usuario')

@section('content')
	
	{!! Form::open(['route'=>'admin.user.store', 'method'=>'POST']) !!}
		<div class="form-group">
		{!! Form::label('Nombre', 'Nombre', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre completo']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('email', 'Correo Electronico', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'ejemplo@exampe.com']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('Password', 'Contraseña', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'XXXXXXXX']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('Type', 'Tipo', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::select('type', [''=>'Selecciona un opcion', 'member'=>'Miembro','admin'=>'Administrador'], null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
		{!! Form::submit('Registrar', ['class'=>'btn btn-success']) !!}
		</div>
	
	{!! Form::close() !!}
@endsection
