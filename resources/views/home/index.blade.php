@extends('layouts.app')

@section('content')
<div class="container">
		@if(Session::has('success'))
		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="alert alert-success">
				{{Session::get('success')}}
				</div>
			</div>
		</div>
		@endif
</div>
<section>
		<!--- Start Carousel Section -->
		<div class="container-fluid">
			@include('inc.slider')
		</div>
		<!--- End Carousel Section -->
</section>



<div class="content_one">
	<div class="container">
		<div class="mt-4 mb-4  wow fadeInUp" >
			<p>{{ $content->find(1)->__('text') }}</p>
		</div>
	</div>


<section>
	@include('home.prod')
</section>


<div class="container">
	<p class="text-center  wow fadeInUp" style="margin-bottom: 8em">
		{{ $content->find(1)->__('text') }}
	</p>
</div>

	<div class="container-fluid  wow fadeIn" data-wow-delay="0.5c" id="product__carousel">
		@include('inc.owlCarousel')

		<a class="more" href="">{{ __('View more products') }}</a>
		
  </div>
 
{{-- @each('admin.images.show', $otherimage, 'otherimage') --}}
    
  	<section style="">
		@include('home.rec')
	</section> 
    
  	<section style="">
		@include('home.rec2')
	</section> 

	<section>
		@include('home.slick_one')
	</section>


  	<section style="">
		  <div class="last d-flex ">
			
					@include('home.inst')
			 
			 
		  </div>
		
	</section> 

</div>


@endsection