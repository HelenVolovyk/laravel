<header class="header">
	
	<div class="name">
	
		<nav class="name navbar navbar-expand-md navbar-light bg-white shadow-sm">
			
			<div class="container">
				
			  <!-- Right Side Of Navbar -->
			<div class="header__burger">
				<span></span>
				<span></span>
				<span></span>
			</div> 

			<a  href="{{ url('/') }}" class="header__logo">
				<i class="fa fa-bandcamp fa-2x" aria-hidden="true"></i>
			</a>

		
			
			{{-- <a class="tel" href="tel:123-456-78"><i class="fa fa-phone fa-2x"></i>  123-456-78</a> --}}
		
			<div class="brend__name">
				<a class="navbar-brand" href="">{{ __('My Stor') }}</a>
			</div>
			
		
		
  <!-- Lang -->
  <ul class="navbar-nav ml-auto ">


			<!-- Authentication Links -->
		<div class="name__enter">
		      @guest
                 
				<div class="nav__search">		
					@include('inc.search')
				</div>          
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('login', app()->getLocale()) }}"><i class="fa fa-user-o" aria-hidden="true"></i></a>
					</li>		

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
							  <a class="dropdown-item" href="{{ route('user.profile.index') }}">
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

					</li>
			  @endguest
			</div>
					
		

			<div class="d-flex justify-content-end">
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
			


			<div class="name__lang">
				<div class="lang mt-2 ml-3">
					@if(count(config('app.languages')) > 1)
					
					<li class="nav-item dropdown d-md-down-none ">
							<a class="" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
										{{ strtoupper(app()->getLocale()) }}
							</a>
							<div class="dropdown-menu dropdown-menu-right">
									@foreach(config('app.languages') as $langLocale => $langName)
										<a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
								
									@endforeach
							</div>
						</li>
						@endif 
				</div>  
			</div>
		</div>
			
		 </ul>

			</div>
		</nav>
	</div>



	