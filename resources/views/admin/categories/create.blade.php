@extends('admin.template.main')
@section('title', 'Nueva Categoria')

@section('content')
	
	{!! Form::open(['route'=>'admin.category.store', 'method'=>'POST']) !!}
		<div class="form-group">
		{!! Form::label('Nombre', 'Nombre', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Categoria']) !!}
		</div>

		<div class="form-group">
		{!! Form::submit('Agregar', ['class'=>'btn btn-success']) !!}
		</div>
	
	{!! Form::close() !!}
@endsection
