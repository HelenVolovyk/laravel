@include('inc.name')
  @section('navbar')

  
	
<div class="container">
	<div class="header__body">
	
		

		<nav class="header__menu">
			
			<ul class="header__list">
			
					{{-- <div class="row justify-content-md-center"> --}}

				{{-- <div class="text-eline-start">
					<a href="tel:123-456-78">123-456-78</a>
				</div> --}}
				
			
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
						<a class="nav-link" href="{{ route('login', app()->getLocale()) }}"><i class="fa fa-user-o" aria-hidden="true"></i></a>
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
			
		<div class="search ">
			@include('inc.search')
		</div>
	
				
			
			</ul>
			
	</nav>	

				

	</div>
</div>
  </header>
