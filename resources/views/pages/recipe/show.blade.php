@extends('layouts.app')

@section('content')
<div class="content">
<div class="container">

	 {{-- <h2>{{ __('Healthy recipes') }}</h2> --}}
	 <div class="d-flex justify-content-between">
		<div class="bread">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a class="breadcrumb__link" href="/">{{ __('Home') }}</a></li>
				<li class="breadcrumb-item" ><a class="breadcrumb__link" href="/">{{ __('recipes') }}</a></li> 
				<li class="breadcrumb-item active" aria-current="page">{{ __('recipe') }}</li> 
				
			</ol>
		</div>

	</div>

	
	 <h3 class="mt-5">{{ $recipe->title }}</h3>
	 {{-- <hr class="featurette-divider"> --}}

    <div class="row featurette">
		
	
			
			<div class="col-md-12 mt-5">
			
				<img src=" {{ Storage::disk('public')->url($image)}}" alt="" width="1200" height="500">
		
			</div>

			<div class="col-md-3" style="overflow: hidden">
				<div class="recipe__sidebar mt-5">
					<div class="recipe__sidebar-content" style="font-size: 20px; color: grey">
						<p><span class="text-muted">Donec ullamcorper</span></p>
				
						{{-- <ul class="recipe ">
							<li class="recipe">gfghghgh dfgg - 300 g</li>
							<li class="recipe">gfghghgh dfgg - 300 g</li>
							<li class="recipe">gfghghgh dfgg - 300 g</li>
							<li class="recipe">gfghghgh dfgg - 300 g</li>
						
						</ul> --}}
					
						{{ $recipe->components }}
						
					</div>
				</div>
			</div>

				<div class="col-md-9  mt-5">
					
					<p>
						{{ $recipe->description }}
					</p>
				
				</div>

				
				<div class="col md-9">
					<div class="d-flex justify-content-end  mb-3">
						{{-- <button type="submit" class="btn btn-primary">{{ __('Add to Cart') }}</button>  --}}
						<a href="" class="wave-btn">
							<span class="wave-btn__text">добавить в корзину</span>
							<span class="wave-btn__waves"></span>
						</a> 

					</div>
				</div>	
			
		
    </div>

	 
{{-- <hr class="featurette-divider"> --}}

   
@endsection