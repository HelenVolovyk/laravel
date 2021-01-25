@extends('layouts.app')

@section('title')
{{ __('All Products') }}
@endsection

@section('content')

<div class="content">
	<div class="shop__container" style="width: 80%; padding: 0 10%; margin: 0 auto;">
		<div class="top row" style="margin: 0" >
			<div class="bread col-auto mr-auto" >
				<ol class="breadcrumb" >
					<li class="breadcrumb-item"><a class="breadcrumb__link" href="/">{{ __('Home') }}</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{ __('Shop') }}</li>
				</ol>
			</div> 
			
			
			<div class="search__shop col-auto">
				@include('inc.search')
			</div> 
		</div>

		<div class="row">
			<div class="col-md-2">
				@include('inc.sidebar')
			</div>

			<div class="col-md-10">
			
				<div class="products">
					
					@foreach($products->chunk(3) as $productChunk)
					
				<div class="row">
				
				@foreach($productChunk as $product)
				
				@include('shop.product.product_view')
				
				@endforeach
				
				</div>
				@endforeach
				</div>
				{{-- <a id="loadMore" href="">Load More</a> --}}
			</div>
		</div>
	</div>
	
</div>
@endsection