@extends('layouts.app')

@section('title')
{{ __('All Products') }}
@endsection

@section('content')

<div class="content">
	<div class="shop__container" >
		<div class="top row" style="margin: 0" >
			<div class="bread col-auto mr-auto" >
				<ol class="breadcrumb" >
					<li class="breadcrumb-item"><a class="breadcrumb__link" href="/">{{ __('Home') }}</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{ __('Shop') }}</li>
				</ol>
			</div> 
						
			{{-- <div class="search__shop col-auto">
				@include('inc.search')
			</div>  --}}
		</div>


		<div class="row">
			<div class="col-md-2">
				<aside class="product-section container">
					<div class="sidebar">
				
						<div class="category_link ">
							<div class="mb-2"><a class="category__link" href="{{route('category.index')}}">{{ __('all categories') }}</a></div>
							<div>
							
						
							</div>
				
							@each('shop.category-view', $categories, 'category') 
			
				
							</div>
						</div>
					</aside>
				</div>
	
				<div class="col-sm-12 col-md-10">
					<div class="f">
					@foreach($products->chunk(3) as $productChunk)
				
					@foreach($productChunk as $product)

						@include('shop.product.product_view')

					@endforeach
				@endforeach
			</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
	