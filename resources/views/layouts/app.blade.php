<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	 <link rel="shortcut icon" href="{{Storage::disk('public')->url('Wy/I1/gI/Kh/r5MZ20S8LYZFNu4o_1639644946.ico')}}" alt=""  type="image/x-icon">
    {{-- <title>{{ config('app.name', 'STOR') }}</title> --}}
	 {{-- <title>MyShop</title> --}}
	 @yield('header')

    <!-- Scripts -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
	 <script src="{{ asset('js/app.js') }}" defer></script>
	 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		  crossorigin="anonymous"></script>
	 {{-- <script src="{{ asset('js/wow.min.js') }}" defer></script> --}}
	 
    @stack('scripts')
   


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	 <link rel="preconnect" href="https://fonts.gstatic.com">
	 <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">
	
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Comforter&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Comforter&family=Kaushan+Script&family=Merienda&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Comforter&family=Kaushan+Script&family=Mali:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Comforter&family=Encode+Sans+Condensed:wght@300&family=Fredericka+the+Great&family=Kaushan+Script&family=Mali:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Righteous&family=Secular+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Righteous&family=Secular+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Prosto+One&display=swap" rel="stylesheet">
	<link rel="preconnect" href="{{ asset('fonts/Boronic.ttf') }}" crossorigin>
	<link rel="preconnect" href="{{ asset('fonts/Bukhari Script Alternates.ttf') }}" crossorigin>
	<link rel="preconnect" href="{{ asset('fonts/Dolley.otf') }}" crossorigin>
	<link rel="preconnect" href="{{ asset('fonts/Elishe.otf') }}" crossorigin>
	<link rel="preconnect" href="{{ asset('fonts/Rosematte.otf') }}" crossorigin>


	 
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	 <link href="{{ asset('css/hover-min.css') }}" rel="stylesheet" media="all">
	 <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" media="all">
	 <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" media="all">
	 

	
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" /> 
	 <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<script src="{{  asset('js/wow.min.js')  }}"></script>
	 
<script>
	new WOW().init();
</script>
  
</head>

	<body style="opacity: 0; transition: .5s;">
		<div id="app">
			<div class="wrapper">
		
			@include('inc.header')


	@php
		//  $uri = $request->path();

		//  if ($url != url('/')) 
		// 	@include('inc.breadcrumb')
		 
	// 	if()
	// @include('inc.breadcrumb')

	// $b = explode('/', $_SERVER['REQUEST_URI']);
	// 	$c = array_slice($b, 2); 

		
		@endphp

		
	
	
				
			
		
	
	{{-- @if(Request::is('about', 'contact', 'payment', 'shares', 'reviews')) --}}
	{{-- @include('inc.breadcrumb')
		 --}}
	{{-- @endif --}}

		
				
			@show
	
			

					
				
	
			
					{{-- <main > --}}
						
								@include('inc.message')
								
						
								@yield('content')
							
							
									
								<div class="go">	
								<a class="go__phone" href="tel:123-56-78"><i class="fa fa-phone" aria-hidden="true"></i></a>
								<div class="go__search">
									
									@include('inc.search')
								

								</div>
								<a class="gotop" href=""><i class="fa fa-arrow-up"></i></a>
							</div>	
					{{-- </main> --}}
				</div>
		</div>

	
		@include('layouts.footer')
		
		@stack('footer-scripts')
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		crossorigin="anonymous"></script>
	  
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script> 
	  <script defer src="{{ asset('js/owl.carousel.min.js') }}"></script> 
	 
	 <script>
		 $(document).ready(function(){
			 $('body').css('opacity', '1');
		 });

		 $(document).ready(function(){
				if (document.location.pathname == '/ru/contact') {
				$('#d').css('display', 'none');   
			}
	  	});
	 </script>
		
		
	</body>
</html>