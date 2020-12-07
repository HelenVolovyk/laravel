@extends('layouts.app')

@section('title')
{{ __('All Products') }}
@endsection

@section('content')


<div class="container">
	<div class="d-flex justify-content-between">
		<div class="">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/">{{ __('Home') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page">{{ __('Shop') }}</li>
			</ol>
		</div>
		
		<div class="">
			@include('inc.search')
		</div>
			
	</div>

		<div class="row">
		<div class="col-md-2">
			<aside class="product-section container">
				<div class="sidebar">
				<h6>{{ __('By Category') }}</h6>
					<div class="category_link mt-3">
						<div class="font-weight-bold"><a href="{{route('category.index')}}">{{ __('all categories') }}</a></div>
						<div>
						
					
						</div>
			
						@each('shop.category-view', $categories, 'category') 
		
			
						</div>
					</div>
				</aside>
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
			</div>
		</div>
	</div>
@endsection