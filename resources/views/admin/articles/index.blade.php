@extends('admin.template.main')
@section('title', 'Lista de Articulos')

@section('content')
	<a href="{{route('admin.article.create')}}" class="btn btn-info">Crear un nuevo Artículo</a>
	<!-- Buscador de Tags -->

  {!! Form::open(['route'=>'admin.article.index', 'method'=>'GET', 'class' => 'navbar-form pull-right']) !!}
    <div class="input-group">      
      {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar artículo...', 'aria-describedby' => 'search']) !!}
      <span class="input-group-addon" id="search">
        <span class="glyphicon glyphicon-search" aria-hidden="true">
        </span>
      </span>
    </div>
  {!! Form::close() !!}
  
  <!-- Fin buscador de Tags -->    
  <br><br>
	<table class="table table-hover">
  		<thead>
  			<th>ID</th>
  			<th>Titulo</th>
  			<th>Categoria</th>
  			<th>Usuario</th>
  			<th>Acción</th>
  		</thead>

  		<tbody>
  			@foreach ($articles as $article)
  				<tr>
  					<td>{{ $article->id }}</td>
  					<td>{{ $article->title }}</td>
  					<td>{{ $article->category->name }}</td>
  					<td>{{ $article->user->name }}</td>
  					<td>
  						<a href="{{ route('admin.article.edit', $article->id) }}" onclick="return confirm('Seguro?')" class="btn btn-success">
  							<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
  						</a>
  						<a href="{{ route('admin.article.destroy', $article->id) }}" onclick="return confirm('Seguro?')" class="btn btn-danger">
  							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>                    
  						</a>
  					</td>
  				</tr>
			@endforeach
  		</tbody>
	</table>
  	<div class="text-center">
    	{!! $articles->render() !!}
  	</div>
@endsection