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
        @section('navbar')

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ __('My Stor') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user.wishlist')}}"><i class="fa fa-heart-o" aria-hidden="true"></i>
                                @if(Cart::instance('wishlist')->count() > 0)
                                <span class="badge badge-pill badge-secondary">{{Cart::instance('wishlist')->count()}}</span>
                                @endif
                            </a>
                        </li>

                        <li class="nav-item">
                       
                            <a class="nav-link" href="{{route('cart.index')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
									 
									


										  @if(Cart::instance('cart')->count() > 0)
								
                            <span class="badge badge-pill badge-secondary">{{Cart::instance('cart')->count()}}</span>
                            @endif
									 </a>		

									 
								</li>
								
								{{-- <li class="nav-item">
								<a class="nav-link" href="{{ route('locale',  __('main.set_lang') ) }} ">{{ __('main.set_lang') }}</a>
								</li> --}}
								
					
								 @if(count(config('app.languages')) > 1)
								 <li class="nav-item dropdown d-md-down-none">
									  <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
												{{ strtoupper(app()->getLocale()) }}
									  </a>
									  <div class="dropdown-menu dropdown-menu-right">
											@foreach(config('app.languages') as $langLocale => $langName)
												 <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
										
											@endforeach
									  </div>
								 </li>
							@endif         

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login', app()->getLocale()) }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register', app()->getLocale()) }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(auth()->user()->IsAdmin)
                                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                        {{ __('Dashboard') }}
                                    </a>
                                    @endif
                                    @if(auth()->user()->IsUser)
                                    <a class="dropdown-item" href="{{ route('user.profile') }}">
                                        {{ __('My Profile') }}
                                    </a>
                                 
                                    <a class="dropdown-item" href="{{ route('user.wishlist') }}">
                                        {{ __('My WishList') }}
                                    </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('user.order') }}">
                                        {{ __('My Orders') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                               
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
      

   <nav class="navbar navbar-expand-lg navbar-light bg-light ">
      <div class="container">
        <div class="collapse navbar-collapse  d-flex justify-content-end" id="navbarNavDropdown">
       
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ __('Shop') }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{route('shop')}}">{{ __('All products') }}</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">  {{ __('About') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">  {{ __('Contact') }}</a>
        </li>
      
      </ul>
    </div>
  </nav>
</div>
@show
     
		  
        <main class="py-4">
			  @include('inc.message')
            @yield('content')
        </main>
    </div>
	 @stack('footer-scripts')
	 {{-- @include('layouts.footer') --}}
</body>
</html>
