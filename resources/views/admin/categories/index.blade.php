@extends('admin.template.main')
@section('title', 'Lista de Categorias')
@section('content')
	
	<a href="{{route('admin.category.create')}}" class="btn btn-info">Registrar un nueva Categoria</a><br><br>
	<table class="table table-hover">
  		<thead>
  			<th>ID</th>
  			<th>Nombre</th>
  			<th>Acción</th>
  		</thead>

  		<tbody>
  			@foreach ($categories as $category)
  				<tr>
  					<td>{{ $category->id }}</td>
  					<td>{{ $category->name }}</td>
  					<td>
  						<a href="{{ route('admin.category.edit', $category->id) }}" onclick="return confirm('Seguro?')" class="btn btn-success">
                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
              </a>
  						<a href="{{ route('admin.category.destroy', $category->id) }}" onclick="return confirm('Seguro?')" class="btn btn-danger">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>                    
              </a>
  					</td>
  				</tr>
			@endforeach
  		</tbody>
	</table>
  <div class="text-center">
  </div>
@endsection