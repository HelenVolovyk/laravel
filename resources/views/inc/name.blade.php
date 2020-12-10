
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
	<div class="container">
		<a class="navbar-brand" href="{{ url('/') }}">
					{{ __('My Stor') }}
		</a>
				
					  <!-- Right Side Of Navbar -->
		  <ul class="nav ">
							<!-- Authentication Links -->
				<li class="nav-item">
					 <a class="nav-link" href="{{route('user.wishlist')}}"><i class="fa fa-heart-o" aria-hidden="true"></i>
						 @if(Cart::instance('wishlist')->count() > 0)
						  <span class="badge badge-pill badge-secondary">{{Cart::instance('wishlist')->count()}}</span>
						  @endif
					 </a>
				</li>

							<li class="nav-item">
								 <a class="nav-link " href="{{route('cart.index')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
									 
								  @if(Cart::instance('cart')->count() > 0)
								 <span class="badge badge-pill badge-secondary">{{Cart::instance('cart')->count()}}</span>
								 @endif
								 </a>
							</li>

						
		  </ul>
	</div>
</nav>



	