<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('pluggins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
	<div class="container">
		@yield('content') 
	</div>
</body>
</html>