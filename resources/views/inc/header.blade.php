@include('inc.name')
  @section('navbar')

   @php
		$url = $_SERVER["REQUEST_URI"];
		$b = explode('/', $_SERVER['REQUEST_URI']);
		$c = array_slice($b, 2); 
		$d = implode($c);
	@endphp 

	 <div class="header__body">
	
		<nav class="header__menu">
				
			<ul class="header__list ">
				
						
				<li class="header__link">
					<a class="header__link <?php if ($d == "shop") { echo ' active';}?>" href={{route('shop', [app()->getLocale()])}}>{{ __('shop') }}</a>
				</li>
				<li class="header__link">
					<a class="header__link  <?php if ($d == "payment") { echo ' active';}?>" href={{route('page', [app()->getLocale(), 'payment' ])}}>{{ __('payment and delivery') }}</a>
				</li>
				<li class="header__link">
					<a class="header__link  <?php if ($d == "shares") { echo ' active';}?>" href={{route('page', [app()->getLocale(),'shares'])}}>{{ __('shares') }}</a>
				</li>
				<li class="header__link">
					<a class="header__link  <?php if ($d == "recipes") { echo ' active';}?>" href={{route( 'recipes', [app()->getLocale()])}}>{{ __('healthy recipes') }}</a>
				</li>
				<li class="header__link">
					<a class="header__link  <?php if ($d == "about") { echo ' active';}?>" href={{route('page', [app()->getLocale(),'about'])}}>{{ __('about') }}</a>
				</li>
				<li class="header__link">
					<a class="header__link  <?php if ($d == "reviews") { echo ' active';}?>" href={{route('reviews', [app()->getLocale(),'reviews'])}}>{{ __('reviews') }}</a>
				</li>
				<li class="header__link">
					<a class="header__link  <?php if ($d == "contact") { echo ' active';}?>" href="{{ route('page', [app()->getLocale(),'contact']) }}">{{ __('contact') }}</a>
				</li>
				<li class="header__link">
					<a class="header__link" >
						<span class="navtel" >	т.(093) 123 11 11 </span>
					</a>
				</li>
				
				
				<div class="header__lang">
					<div class="lang mt-2">
						@if(count(config('app.languages')) > 1)
						
							<li class="nav-item dropdown d-md-down-none ">
								<a class="header__link " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
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
						<a class="header__link" href="{{ route('login', [app()->getLocale()]) }}"><i class="fa fa-user-o" aria-hidden="true"></i></a>
					</li>		
				@else
						<li class="nav-item dropdown ml-2">
							<a id="navbarDropdown" class="header__link nav-link dropdown-toggle font-weight-bold" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} 
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								@if(auth()->user()->IsAdmin)
								<a class="dropdown-item" href="{{ route('admin.dashboard', [app()->getlocale()]) }}">
										{{ __('Dashboard') }}
								</a>
								@endif
								@if(auth()->user()->IsUser)
								<a class="dropdown-item" href="{{ route('user.profile.index', [app()->getlocale()]) }}">
										{{ __('My Profile') }}
								</a>
							
								<a class="dropdown-item" href="{{ route('wishlist', [app()->getlocale()]) }}">
										{{ __('My WishList') }}
								</a>
								@endif
								<a class="dropdown-item" href="{{ route('user.order', [app()->getlocale()]) }}">
										{{ __('My Orders') }}
								</a>
								<a class="dropdown-item" href="{{ route('logout', [app()->getlocale()]) }}"
									onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout', [app()->getlocale()]) }}" method="POST" style="display: none;">
										@csrf
								</form>
							</div>
						</li>
				@endguest
				</div>
	
		
			</ul>

		</nav>	
	
	</div>

</header>