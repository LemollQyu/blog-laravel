<html>
	<head>
		<title>Laravel | {{ $title }}</title>
		@vite('resources/css/app.css')
	</head>
	<body>
	
		@include('partials.navbar')
		
		<div class="border mt-3">
			@yield('container')
		</div>
	</body>
</html>