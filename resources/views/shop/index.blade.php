@extends('layouts.app')

@section('title')
{{ __('All Products') }}
@endsection

@section('content')

<div class="content">
	<div class="container">
		<div class="top row">
			<div class="bread col-auto mr-auto">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">{{ __('Home') }}</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{ __('Shop') }}</li>
				</ol>
			</div>
			
			<div class="search__shop col-auto">
				@include('inc.search')
			</div> 
				
		</div>

		<div class="row">
			<div class="col-md-2">
				<aside class="product-section container">
					<div class="sidebar">
					<h6>{{ __('By Category') }}</h6>
						<div class="category__link mt-3">
							<div class="font-weight-bold pb-2">
								<a class="category__link" href="{{route('category.index')}}">{{ __('all categories') }}
								</a>
							</div>
						
								@each('shop.category-view', $categories, 'category') 
						
						</div>
					</div>	
				</aside>
				
				<div class="ac-category">
					<div class="ac-block-one">
						<div class="ac-block__item">
							<div class="ac-block__title">
								{{ __('all categories') }}
							</div>
								<div class="ac-block__text">
									@each('shop.category-view', $categories, 'category') 
								</div>
							</div>
					</div>
				</div>
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
				<a id="loadMore" href="">Load More</a>
			</div>
		</div>
	</div>
	
</div>
@endsection