@include('inc.name')
  @section('navbar')


  
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
	<div class="container">

		
			
				<div class="collapse navbar-collapse  d-flex justify-content-end" id="navbarNavDropdown">
	
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					{{__('Shop')}}
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="{{route('shop')}}">{{ __('All products') }}</a>
					<a class="dropdown-item" href="#">{{ __('Another action') }}</a>
					<a class="dropdown-item" href="#">{{ __('Another action') }}</a>
					</div>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="/about">{{ __('About') }}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/contact">{{ __('Contact') }}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/contact">{{ __('Blog') }}</a>
				</li>

			

				@guest
				<li class="nav-item">
					 <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
				</li>
				@if (Route::has('register'))
					 <li class="nav-item">
						  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
					 </li>
				@endif
		  @else
				<li class="nav-item dropdown ml-2">
					 <a id="navbarDropdown" class="nav-link dropdown-toggle font-weight-bold" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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


			
				<div class="lang mt-2 ml-2">
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
			</ul>
		</div>
		
	</div>
</nav>
