@extends('layouts.app')

@section('content')
<div class="content">
<div class="container">
 
	 <h2>{{ __('Healthy recipes') }}</h2>
	 <div class="d-flex justify-content-between">
		<div class="bread">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a class="breadcrumb__link" href="/">{{ __('Home') }}</a></li>
				<li class="breadcrumb-item" ><a class="breadcrumb__link" href="/">{{ __('recipes') }}</a></li> 
				<li class="breadcrumb-item active" aria-current="page">{{ __('recipes') }}</li> 
				
			</ol>
		</div>
		{{-- <div class="">
			@include('inc.search')
		</div> --}}
	</div>
	 <h3 class="mt-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit illum eveniet nesciunt quo impedit laboriosam dolorum ab ipsum id, inventore, nam cum obcaecati deleniti non illo repudiandae quia doloribus vitae.</h3>
	 <hr class="featurette-divider">

    <div class="row featurette">
		
	
			
			<div class="col-md-12 mt-5">
				<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="1200" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
			</div>

			<div class="col-md-3" style="overflow: hidden">
				<div class="recipe__sidebar mt-5">
					<div class="recipe__sidebar-content">
						<p><span class="text-muted">Donec ullamcorper</span></p>
				
						<ul class="recipe ">
							<li class="recipe">gfghghgh dfgg - 300 g</li>
							<li class="recipe">gfghghgh dfgg - 300 g</li>
							<li class="recipe">gfghghgh dfgg - 300 g</li>
							<li class="recipe">gfghghgh dfgg - 300 g</li>
						<hr>
							<li class="recipe">gfghghgh dfgg - 300 g</li>
						</ul>
					
					</div>
				</div>
			</div>

				<div class="col-md-9  mt-5">
					<h4 class="featurette-heading mt-5">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h4>
					<p class="lead mt-3">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.
					</p>
					<p class="lead mt-3">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.
					</p>
					<p class="lead mt-3">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.
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

	 
<hr class="featurette-divider">

   
@endsection