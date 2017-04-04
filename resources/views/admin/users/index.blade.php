@extends('admin.template.main')
@section('title', 'Lista de Usuarios')
@section('content')
	
	<a href="{{route('admin.user.create')}}" class="btn btn-info">Registrar un nuevo usuario</a><br><br>
	<table class="table table-hover">
  		<thead>
  			<th>ID</th>
  			<th>Nombre</th>
  			<th>Correo Electronico</th>
  			<th>Tipo</th>
  			<th>Acción</th>
  		</thead>

  		<tbody>
  			@foreach ($users as $user)
  				<tr>
  					<td>{{ $user->id }}</td>
  					<td>{{ $user->name }}</td>
  					<td>{{ $user->email }}</td>
  					<td>{{ $user->type }}</td>
  					<td>
  						<a href="{{ route('admin.user.edit', $user->id) }}" onclick="return confirm('Seguro?')" class="btn btn-success">
                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
              </a>
  						<a href="{{ route('admin.user.destroy', $user->id) }}" onclick="return confirm('Seguro?')" class="btn btn-danger">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>                    
              </a>
  					</td>
  				</tr>
			@endforeach
  		</tbody>
	</table>
  <div class="text-center">
    {!! $users->render() !!}
  </div>
@endsection