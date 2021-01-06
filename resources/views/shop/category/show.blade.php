@extends('layouts.app')

@section('title')
 Products by   {{$category['title']}} 
@endsection

@section('content')

<div class="content">
	<div class="container">
		<div class="d-flex justify-content-between">
			<div class="bread">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">{{ __('Home') }}</a></li>
					<li class="breadcrumb-item "><a href="/shop">{{ __('Shop') }}</a></li>
					<li class="breadcrumb-item "><a href="{{route('category.index')}}">{{ __('All Categories') }}</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{ $category->__('title')}}</li> 
				</ol>
			</div>
			{{-- <div class="">
				@include('inc.search')
			</div> --}}
		</div>




		<div class="row">
			<div class="col-md-2">
				<aside class="product-section container">
					<div class="sidebar">
						<h6>{{ __('By Category') }}</h6>
						<div class="category_link mt-3">
						<div><a href="{{route('category.index')}}">{{ __('all categories') }}</a></div>

						@each('shop.category-view', $categories, 'category') 
						</div>
					</div>
				</aside>
			</div>

			<div class="col-md-10">
		
				<h1 class="text-center mb-4">{{ __('Products by') }}</h1>
				<h2 class="text-center mb-4">{{ $category->__('title')}}</h2>

				<div class="products text-center">
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
</div>
@endsection