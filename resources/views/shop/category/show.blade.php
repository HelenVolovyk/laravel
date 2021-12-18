@extends('layouts.app')

@section('title')
 Products by   {{$category['title']}} 
@endsection

@section('content')

	<div class="content">
		<div class="container__fluid">
			<div class="shop__container">
			
				@include('inc.breadcrumb')

				<h2 class="text-center mb-4">{{ __('Products by') }} "{{ $category->__('title')}}"</h2>
			

				<div class="row">

					<div class="col-md-2">
						@include('inc.sidebar')
					</div>
				
					<div class="col-md-10">
						<div class="products text-center">
							@foreach($products->chunk(6) as $productChunk)
								<div class="row">
									@foreach($productChunk as $product) 
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
											@include('shop.product.product_view') 
										</div>
									@endforeach
								</div>
							@endforeach
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection