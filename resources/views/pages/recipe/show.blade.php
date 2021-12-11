@extends('layouts.app')

@section('content')

	<div class="content">
		
		<div class="container__fluid">
			<div class="shop__container">	
				<div class="d-flex justify-content-between">
					<div class="bread">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a class="breadcrumb__link" href="/">{{ __('Home') }}</a></li>
							<li class="breadcrumb-item" ><a class="breadcrumb__link" href="{{ route( 'recipes', [app()->getLocale()]) }}">{{ __('recipes') }}</a></li> 
							<li class="breadcrumb-item active" aria-current="page">{{ $recipe->__('title') }}</li> 
						</ol>
					</div>
				</div>
			</div>
		</div>
	

		<h2 class="text-uppercase" style="color: #c7a4ca;">{{ $recipe->__('title') }}</h2>
		
		<div class="container">
    	<div class="row featurette">
		
				
			<div class="col-md-12 mt-5">
				<div class="recipe__img ibg" style="width: 100%; height: 600px">
					<img class="ibg" src=" {{ Storage::disk('public')->url($image)}}" alt="" width="1200" height="500">
				</div>
			</div>

			<div class="col-md-3 mt-5" style="overflow: hidden">
				<div class="recipe__sidebar">
					<div class="recipe__sidebar-content" style="font-size: 16px; color: grey">
						<p><span class="" style="color: #c7a4ca">{{ __('components') }}</span></p>
				
						<div class="comp" style="">
							 {{ $recipe->__('components') }}
						</div> 
											
					</div>
				</div>
			</div>

				<div class="col-md-9  mt-5">
					<p >{{ $recipe->__('description') }}</p>
					<p >{{ $recipe->__('description') }}</p>
					{{-- <p >{{ $recipe->__('description') }}</p> --}}
				</div>
				
				<div class="col md-9">
					<div class="d-flex justify-content-end  mb-3">
						{{-- <button type="submit" class="btn btn-primary">{{ __('Add to Cart') }}</button>  --}}
						<a href="" class="wave-btn">
							<span class="wave-btn__text">{{ __('добавить в корзину') }}</span>
							<span class="wave-btn__waves"></span>
						</a> 

					</div>
				</div>	
			
   </div>

@endsection