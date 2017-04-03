@extends('admin.template.main')
@section('title', 'Lista de Usuarios')
@section('content')
	@foreach ($users as $user)
		<p>This is user {{ $user->name }}</p>
	@endforeach

	{!! $users->render() !!}
@endsection