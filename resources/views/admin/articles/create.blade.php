@extends('admin.template.main')
@section('title', 'Nuevo Articulo')

@section('content')
	{!! Form::open(['route' => 'admin.article.store', 'method' => 'POST', 'files' => true]) !!}
		<div class="form-group">
		{!! Form::label('title', 'Título', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Título del artículo']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('category_id', 'Categoria', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::select('category_id', $categories, null,  ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('content', 'Contenido', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::textarea('content', null, ['class'=>'form-control', 'placeholder'=>'Aquí va el contenido']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('tag_id', 'Tag', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::select('tag_id', $tags, null,  ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('image', 'Imagen', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::file('image') !!}
		</div>

		<div class="form-group">
		{!! Form::submit('Agregar', ['class'=>'btn btn-success']) !!}
		</div>
	{!! Form::close() !!}
@endsection