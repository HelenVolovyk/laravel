@extends('layouts.app')

@section('header')
	<title>{{ __('Shop') }}</title>
@endsection

@section('content')

	<div class="content">
		<div class="container__fluid">
			<div class="shop__container">

				<div class="top row" style="margin: 0" >
					<div class="bread col-auto mr-auto" >
						<ol class="breadcrumb" >
							<li class="breadcrumb-item"><a class="breadcrumb__link" href="/">{{ __('Home') }}</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ __('Shop') }}</li>
						</ol>
					</div> 	
				</div>


				<div class="row">
					<div class="col-md-3">
							@include('inc.sidebar')
					</div>
		
					<div class="col-sm-12 col-md-9">

						<div class="f">
							@foreach($products->chunk(6) as $productChunk)
								@foreach($productChunk as $product)
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
										@include('shop.product.product_view')
									</div>
								@endforeach
							@endforeach
						</div>

						<div class="mt-3">
							{{$products->links()}}
						</div>

					</div>
					
				</div>

			</div>
		</div>
	</div>
@endsection
	