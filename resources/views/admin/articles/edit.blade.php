@extends('admin.template.main')
@section('title', 'Actualizar Articulo')

@section('content')
	{!! Form::open(['route' => ['admin.article.update', $article], 'method' => 'PUT']) !!}
		<div class="form-group">
		{!! Form::label('title', 'Título', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::text('title', $article->title, ['class'=>'form-control', 'placeholder'=>'Título del artículo']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('category_id', 'Categoria', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::select('category_id', $categories, $article->category->id,  ['class' => 'form-control select-category', 'required']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('content', 'Contenido', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::textarea('content', $article->content, ['class'=>'form-control text-area', 'placeholder'=>'Aquí va el contenido']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('tag_id', 'Tag', ['class'=>'col-sm-2 control-label']) !!}
		{!! Form::select('tag_id[]', $tags, $my_tags,  ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
		</div>

		<div class="form-group">
		{!! Form::submit('Actualizar', ['class'=>'btn btn-success']) !!}
		</div>
	{!! Form::close() !!}
@endsection

@section('js')
	<script>
		$(".select-tag").chosen({placeholder_text_multiple : "Selecciona uno a varias opciones!"});

		$(".select-category").chosen({placeholder_text_simple : "Selecciona una opción!"});
  
		$('.text-area').trumbowyg();
	</script>
@endsection