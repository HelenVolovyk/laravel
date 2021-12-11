@extends('layouts.app')
@section('header')
	<title>{{ $metaTitle }}</title>
@endsection

@section('content')
<div class="content">

	{{-- <hr class="featurette-divider"> --}}
		@include('inc.breadcrumb')


<h2>{{ __('PAYMENT AND DELIVERY') }}</h2>

<section id="payment__one">
	<div class="container-fluid  wow fadeIn  mt-5" >
		<div class="payment__box ">
				<div class="payment__box-square ibg">
					<img class="ibg" src="{{Storage::disk('public')->url($otherimages->find(1)->img_src)}}" alt="">
				</div>
		</div>
	
			<div class="payment__block">
				<div class="grey">Donec sed odio dui. Cras justo odio, dapibus ac </div>
				<div class="white">Donec sed odio dui. Cras justo odio, dapibus ac </div>
			</div>	
	</div>	
</section>

	<div class="container-fluid mt-5 mb-5 wow fadeIn" data-wow-duration="2s">
 
	
		<div class="row">
			<div class="payment">
				<div class="payment__content">
					<div class="">
						<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
						<p class="">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
				
					</div>
				</div>	
				<div class="payment__photo mt-3 mb-3">
					<div class="p_photo ibg ">
						
							<img class="ibg" src="{{Storage::disk('public')->url($otherimages->find(36)->img_src)}}" alt="" >
					</div>
				</div>
			</div>
		 </div>
	</div>

	
	<div class="paiment-container__left  wow fadeIn" data-wow-duration="2s">

		 <div class="col-md-6 col-sm-12">
			<div class="payment__title">
				<i class="fa fa-money fa-2x pr-3 pb-1" aria-hidden="true"></i> 
			 	<h2 class="payment__title">Heading</h2>
			</div>
		
			<p class="heading" >
			 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
			</p>
			 
		  </div>
	</div> 

		<div class="paiment-container__right wow fadeIn" data-wow-duration="2s">
			<div class="col-md-5 col-sm-12">
				<div class="payment__title">
					<i class="fa fa-credit-card fa-2x pr-3 pb-1" aria-hidden="true"></i>
					<h2>Heading</h2>
				</div>
			
				<p class="heading" >Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			
			
			</div>
		
		</div>
  
		
</div>  




@endsection