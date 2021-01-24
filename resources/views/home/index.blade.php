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



<div class="content">
	<div class="container">
		<div class="mt-4 mb-4">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate atque asperiores nostrum quam enim obcaecati tempori tainerbus eveniet numquam, cumque porro ad, rerum repudiandae earum placeat, libero recusandae. Voluptate, praesentium laborum?</p>
		</div>
	</div>


<section>
	@include('home.prod')
</section>



	<p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Debitis inventore quos consectetur dolorum ab, illo quaerat perferendis minima accusamus error nemo voluptatem fuga dolorem doloremque id odio in soluta accusantium?</p>


<div class="container-fluid">
 	@include('inc.owlCarousel')
</div>


  <div class="text-center button-container mt-3 mb-5">
    <a href="/shop" class="">{{ __('View more products') }}</a>
  </div>   
    
  	<section style="height: 60vh">
		@include('home.rec')
	</section> 
    
  	<section style="height: 60vh">
		@include('home.inst')
	</section> 

</div>


@endsection