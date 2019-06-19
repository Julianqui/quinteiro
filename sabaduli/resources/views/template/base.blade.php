<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<link rel="stylesheet" href={{ asset('/css/app.css') }}>
		<link rel="stylesheet" href={{ asset('/css/login.css') }}>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	</head>
	<body>
		@include('partials.navbar')
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					@yield('content')
				</div>
			</div>
		</div>
		<script src={{ asset('/js/app.js') }}></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	</body>
</html>
