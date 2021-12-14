<header class="header">

{{-- 	 
@endphp --}}
	<div class="name">
	
		<nav class="name navbar navbar-expand-md navbar-light bg-white shadow-sm">
			
			<div class="container-fluid">
				
			  <!-- Right Side Of Navbar -->
			<div class="header__burger">
				<span></span>
				<span></span>
				<span></span>
			</div> 

		
			<div class="brend__name">
			{{-- <a  href="{{ url('/') }}" class="header__logo"> --}}
			<a  href="{{ url('/') }}" class="logo">
				{{-- <i class="fa fa-bandcamp fa-2x" aria-hidden="true"></i> --}}
				
				<img class="logo pb-2" src="{{Storage::disk('public')->url('Rp/w6/5a/SF/ZgaSBAKb9cBJkM4P_1639521301.png')}}" alt="" width="90px" height="90px">
				{{-- <img class="logo pb-2" src="{{Storage::disk('public')->url('Sv/MD/Nk/fw/RRQVXW86nxEkwzT5_1639411219.ico')}}" alt="" width="90px" height="90px"> --}}

				<div class="myname">
					<div class="fishfood">
						{{ __('BONITO') }}
						
						{{-- {{ __('Fish Food') }} --}}
					</div>
					{{-- <span class="bonito">морепродукты</span>  --}}
				</div>
			
			</a>

		
			
			{{-- <a class="tel" href="tel:123-456-78"><i class="fa fa-phone fa-2x"></i>  123-456-78</a> --}}
		
			
				{{-- <a class="navbar-brand" href="">
					
					<div class="fishfood">
						{{ __('Fish Food') }}
					</div>
				</a> --}}
			</div>
		
			
		
		
  <!-- Lang -->
  <ul class="navbar-nav ml-auto ">


			<!-- Authentication Links -->
		<div class="name__enter">
		      @guest
                 
				{{-- <div class="nav__search">		
					@include('inc.search')
				</div>   --}}
			   
	
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('login', app()->getLocale()) }}"><i class="fa fa-user-o" aria-hidden="true"></i></a>
					</li>		

					@else
					<li class="nav-item dropdown">
						 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							<span style="color: var(--prima);"> {{ Auth::user()->name }}</span>

							  <span class="caret"></span>
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
						  
							  <a class="dropdown-item" href="{{ route('wishlist', [app()->getlocale()]) }}">
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
					 <a class="nav-link" href="{{route('wishlist', [app()->getlocale()])}}"><i class="fa fa-heart-o" aria-hidden="true"></i>
						 @if(Cart::instance('wishlist')->count() > 0)
						  <span class="badge badge-pill badge-secondary">{{Cart::instance('wishlist')->count()}}</span>
						  @endif
					 </a>
				</li>
		

				<li class="nav-item">
					<a class="nav-link" href="{{route('cart.index', [app()->getlocale()])}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
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



	