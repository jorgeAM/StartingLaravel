@extends('admin.template.main')
@section('title', 'Actualizar Usuario')

@section('content')
	{!! Form::open(['route'=> ['admin.user.update', $user], 'method'=>'PUT']) !!}
		<div class="form-group">
		{!! Form::label('Nombre', 'Nombre', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::text('name', $user->name , ['class'=>'form-control', 'placeholder'=>'Nombre completo']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('email', 'Correo Electronico', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::email('email', $user->email, ['class'=>'form-control', 'placeholder'=>'ejemplo@exampe.com']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('Type', 'Tipo', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::select('type', [''=>'Selecciona un opcion', 'member'=>'Miembro','admin'=>'Administrador'], null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
		{!! Form::submit('Actualizar', ['class'=>'btn btn-success']) !!}
		</div>
	
	{!! Form::close() !!}
@endsection
