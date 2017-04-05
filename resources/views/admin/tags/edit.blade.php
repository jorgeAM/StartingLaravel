@extends('admin.template.main')
@section('title', 'Editar Tag')

@section('content')
	
	{!! Form::open(['route'=>['admin.tag.update', $tag], 'method'=>'PUT']) !!}
		<div class="form-group">
		{!! Form::label('Nombre', 'Nombre', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::text('name', $tag->name, ['class'=>'form-control', 'placeholder'=>'Categoria']) !!}
		</div>

		<div class="form-group">
		{!! Form::submit('Actualizar', ['class'=>'btn btn-success']) !!}
		</div>
	
	{!! Form::close() !!}
@endsection
