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
  						<a href="" class="btn btn-danger"></a>
  						<a href="" class="btn btn-warning"></a>
  					</td>
  				</tr>
			@endforeach
  		</tbody>
	</table>

	{!! $users->render() !!}
@endsection