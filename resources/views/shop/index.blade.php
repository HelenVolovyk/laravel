@extends('layouts.app')

@section('header')
	<title>{{ __('Shop') }}</title>
@endsection


@section('content')

	<div class="content">
		<div class="container__fluid">
			<div class="shop__container">

					
				<div class="row justify-content-between">
						<div class="col-6">
							<ol class="breadcrumb" >
								<li class="breadcrumb-item"><a class="breadcrumb__link" href="/">{{ __('Home') }}</a></li>
								<li class="breadcrumb-item active" aria-current="page">{{ __('Shop') }}</li>
							</ol>
						</div> 
			
								
					<div class="aaa col-6 d-flex justify-content-end">
						
						<a class="pr-3" href="{{route('categories', [app()->getlocale()])}}">{{ __('categories') }}</a>
							<a href="">{{ __('price') }}
								<a href="{{route('shop.priceUp', [app()->getLocale()])}}">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
									</svg>
								</a>
							</a>
						
							<a href="{{route('shop.priceDown', [app()->getLocale()])}}">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
								</svg>
							</a>	
							
					</div>
				</div>
				
				

				<div class="row shop">
					<div class="col-md-3">
							@include('inc.sidebar')
					</div>
		
					<div class="col-sm-12 col-md-9">
						<div class="f">
							@include('inc.product-sort')
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection
	