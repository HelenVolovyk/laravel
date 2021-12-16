@extends('layouts.app')

@section('content')

	<div class="content">
		
		@include('inc.breadcrumb')

		<h2 class="text-uppercase recipe__title" style="color: var(--recipe-title)">{{ $recipe->__('title') }}</h2>
		
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
						<p><span class="recipe__title" style="color: var(--recipe-title);">{{ __('components') }}</span></p>
				
						<div class="comp" style="">
							 {{ $recipe->__('components') }}
						</div> 
											
					</div>
				</div>
			</div>

				<div class="col-md-9  mt-5">
					<p >{{ $recipe->__('description') }}</p>
					<p >{{ $recipe->__('description') }}</p>
				</div>
				
				<div class="col md-9">
					<div class="d-flex justify-content-end  mb-3">
						{{-- <button type="submit" class="btn btn-primary">{{ __('Add to Cart') }}</button>  --}}
						
						{{-- <a href="" class="wave-btn">
							<span class="wave-btn__text">{{ __('добавить в корзину') }}</span>
							<span class="wave-btn__waves"></span>
						</a>  --}}

					</div>
				</div>	
	
   </div>

@endsection