<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('pluggins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
	<div class="container">
		@include('admin.template.partials.nav')
	</div>

	<div class="container">
		@yield('content') 
	</div>
	<script src="{{ asset('pluggins/jquery/js/jquery.js') }}"></script>
	<script src="{{ asset('pluggins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>