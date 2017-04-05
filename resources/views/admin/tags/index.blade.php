@extends('admin.template.main')
@section('title', 'Lista de Tags')
@section('content')
	
	<a href="{{route('admin.tag.create')}}" class="btn btn-info">Registrar un nuevo Tag</a><br><br>
	<table class="table table-hover">
  		<thead>
  			<th>ID</th>
  			<th>Nombre</th>
  			<th>Acción</th>
  		</thead>

  		<tbody>
  			@foreach ($tags as $tag)
  				<tr>
  					<td>{{ $tag->id }}</td>
  					<td>{{ $tag->name }}</td>
  					<td>
  						<a href="{{ route('admin.tag.edit', $tag->id) }}" onclick="return confirm('Seguro?')" class="btn btn-success">
                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
              </a>
  						<a href="{{ route('admin.tag.destroy', $tag->id) }}" onclick="return confirm('Seguro?')" class="btn btn-danger">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>                    
              </a>
  					</td>
  				</tr>
			@endforeach
  		</tbody>
	</table>
  <div class="text-center">
    {!! $tags->render() !!}
  </div>
@endsection