@extends('layouts.app')

@section('title')
Wish List
@endsection



@section('content')

	 @include('inc.breadcrumb')
	
 <div class="content cart">

	@if(Cart::instance('wishlist')->count() > 0)

		<h2 class="text-center mb-5" style="text-transform: uppercase">{{ __('wishlist') }}</h2>
		
		<div class="row justify-content-md-center">
			<div class="col-md-6">
			
				<table class="table table-light">
					<thead>
						<tr class="cart__table-title">
							<th >{{ __('Product') }}</th>
							<th>{{ __('Price') }}</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@each('user.wishlist.parts.wishlist_view', Cart::instance('wishlist')->content(), 'row')
					</tbody>
				</table>
								
			</div>
		</div>

	@else

		<div class="justify-content-center">
			<h2>{{ __('No items in Wish List!') }}</h2> 
		
				<div class="row justify-content-center ">
					<h3 style="color: var(--link-active)">{{ __("but it's easy to fix") }}</h3>
					<i class="fa fa-smile-o fa-2x pl-3" aria-hidden="true"></i>
				</div>
			
				<div class="text-center mt-5 mb-5" >
					<a href={{route('shop', [app()->getLocale()])}} class="shares__link" >{{ __('to the store') }}</a>
				</div>
		</div> 
		
	@endif
</div> 
@endsection