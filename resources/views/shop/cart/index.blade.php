@extends('layouts.app')

@section('title')
Shopping Cart
@endsection



@section('content')
  
  @include('inc.breadcrumb')
  @include('inc.message')
  <div class="content cart">

  @if(Cart::instance('cart')->count() > 0)
	<div class="container">
	
	 	<h1 class="text-center">{{ __('cart') }}</h1>
			<div class="row justify-content-md-center mt-5">
				<div class="cart__table col-sm-12 col-md-10 col-md-offset-3 col-sm-offset-3">
					<table class="table table-light table-sm ">
						<thead>
							<tr class="cart__table-title">
							<th>{{ __('Product') }}</th>
							<th>{{ __('Qty') }}</th>
							<th>{{ __('Price') }}</th>
							<th>{{ __('Subtotal') }}</th>
							</tr>
						</thead>
						<tbody>
							@each('shop.cart.parts.cart_view', Cart::instance('cart')->content(), 'row')
						</tbody>
					</table>
				</div>
			</div>

 			<div class="row-right mt-5">
				<div class="col-sm-11 col-md-11 col-md-offset-3 col-sm-offset-3">
					<div>
						<span class="cart__total" ><strong>{{ __('Total') }}
						{{Cart::total()}}</strong></span>
					</div>
					<div class="mt-3">
						<a href="{{ route('checkout', app()->getLocale()) }}" type="button" class="btn btn-success">
							<span style="font-size: 20px">
								{{ __('Checkout') }}
							</span>
						</a> 
					</div>
					<div class=" mt-5" >
						<a href={{route('shop', [app()->getLocale()])}} class="shares__link" >{{ __('continue shopping?') }}</a>
					</div>
				</div>
			</div>

  	@else

			<div class="justify-content-center col-md-4">
					<h2>{{ __('No items in your Cart!') }}</h2> 
					<div class="row justify-content-center ">
						<h3 style="color: var(--link-active)">{{ __("but it's easy to fix") }}</h3>
						<i class="fa fa-smile-o fa-2x pl-3" aria-hidden="true"></i>
					</div>
				
					<div class="text-center mt-5 mb-5" >
						<a href={{route('shop', [app()->getLocale()])}} class="shares__link" >{{ __('to the store') }}</a>
					</div>
			</div>

		</div>
	@endif
</div>
@endsection