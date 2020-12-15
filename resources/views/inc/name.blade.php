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

			<a  href="{{ url('/') }}" class="header__logo ">
				<i class="fa fa-bandcamp fa-2x" aria-hidden="true"></i>
			</a>
			
			<a class="navbar-brand" href="">{{ __('My Stor') }}</a>
			
			
			  <!-- Center Side Of Navbar -->		
		<div class="header__body">		 
			<div class="mt-3"> 
	
	
		<nav class="header__menu">
			<ul class="header__list">
		
					<li class="header__link">
					<a class="header__link" href={{route('shop')}}>{{ __('Shop') }}</a>
					</li>
					<li class="header__link">
						<a class="header__link" href={{route('payment')}}>{{ __('Payment and delivery') }}</a>
					</li>
					<li class="header__link">
						<a class="header__link" href={{route('shares')}}>{{ __('Shares') }}</a>
					</li>
					<li class="header__link">
						<a class="header__link" href={{route('recipes')}}>{{ __('Healthy recipes') }}</a>
					</li>
					<li class="header__link">
						<a class="header__link" href="/about">{{ __('About') }}</a>
					</li>
					<li class="header__link">
						<a class="header__link" href="/contact">{{ __('Contact') }}</a>
					</li>

					<div class="header__lang">
						<div class="lang mt-2 ml-2">
							@if(count(config('app.languages')) > 1)
							
								<li class="nav-item dropdown d-md-down-none ">
									<a class="header__link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
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
			
		<div class="header__enter">
			@guest
								
			<li class="nav-item">
				 <a class="header__link" href="{{ route('login', app()->getLocale()) }}"><i class="fa fa-user-o" aria-hidden="true"></i></a>
			</li>		
		@else
				<li class="nav-item dropdown ml-2">
					<a id="navbarDropdown" class="header__link nav-link dropdown-toggle font-weight-bold" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							{{ Auth::user()->name }} 
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
													
				</li>
		@endguest
		</div>
		
	{{-- <div class="search">
		@include('inc.search')
	</div>
	--}}
			
		
				</ul>
			</nav>	
		</div>
	</div>


  <!-- Lang -->
  <ul class="navbar-nav ml-auto ">
			<div class="name__lang">
				<div class="lang mt-2 mr-2">
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

			<!-- Authentication Links -->
		<div class="name__enter">
		      @guest
                           
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
			</div>
			

						
		 </ul>



			</div>
		</nav>
	</div>
</header>


	