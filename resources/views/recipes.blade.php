@extends('layouts.app')

@section('content')
<div class="content">
<div class="container">
 
    <h2>{{ __('Healthy recipes') }}</h2>
	 <hr class="featurette-divider">
	 <div class="d-flex justify-content-between">
		<div class="bread">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a class="breadcrumb__link" href="/">{{ __('Home') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page">{{ __('recipes') }}</li> 
				
			</ol>
		</div>
		{{-- <div class="">
			@include('inc.search')
		</div> --}}
	</div>



    <div class="row featurette">
      <div class="col-md-7 mt-5">
        <h2 class="featurette-heading ">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
		  <p class="lead mt-5 ">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
		  <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
		
		 <div class="mt-5">
			<a class="recipes__link" href="{{ route('recipe') }}">
			Donec ullamcorper zdfbdbg
			</a>
		</div>
		</div>
			
		
      <div class="col-md-5 mt-3 mb-3">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2 mt-5">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
		  <p class="lead mt-5">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
		  <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
	
		  <div class="col-md-9 offset-md-8 mt-5">
			<a class="recipes__link" href="{{ route('recipe') }}">
				Donec ullamcorper zdfbdbg
				</a>
			</div>
		</div>
		
      <div class="col-md-5 order-md-1 mt-3 mb-3">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 mt-5">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead mt-5">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 mt-3 mb-3">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">
</div>
</div>
@endsection