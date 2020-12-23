<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'STOR') }}</title>-->
    <title>MyShop</title>

    <!-- Scripts -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
</head>

	<body>
		<div id="app">
			<div class="wrapper">
		
			@include('inc.header')
			{{-- @section('navbar') --}}

			@show
		
					@if(Request::is('/'))
						{{-- @include('inc.slider') --}}
						
					@endif


	
			
					<main class="py-4">
						<div class="container">
								@include('inc.message')
						
								@yield('content')
						</div>
						
					</main>
				</div>
		</div>
		
		@include('inc.footerr')
		@stack('footer-scripts')
		
	</body>
</html>