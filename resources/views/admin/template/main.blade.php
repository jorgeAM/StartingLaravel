<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('pluggins/bootstrap/css/bootstrap.css') }}">
	<!--Archivo chosen de css-->
	<link rel="stylesheet" href="{{ asset('pluggins/chosen/chosen.css') }}">
	<!--Archivo trumbowyg de css-->
	<link rel="stylesheet" href="{{ asset('pluggins/trumbowyg/dist/ui/trumbowyg.css') }}">
</head>
<body>
	<div class="container">
		@include('admin.template.partials.nav')
	</div>

	<div class="container">
		@include('flash::message')
		@include('admin.template.partials.errors')
		@yield('content') 
	</div>
	<script src="{{ asset('pluggins/jquery/js/jquery.js') }}"></script>
	<script src="{{ asset('pluggins/bootstrap/js/bootstrap.js') }}"></script>
	<!--Archivo chosen de js-->
	<script src="{{ asset('pluggins/chosen/chosen.jquery.js') }}"></script>
	<!--Archivo trumbowyg de js-->
	<script src="{{ asset('pluggins/trumbowyg/dist/trumbowyg.js') }}"></script>

	@yield('js')
</body>
</html>