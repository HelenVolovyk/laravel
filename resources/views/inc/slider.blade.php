
	 

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
	<ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
	  <div class="carousel-item active ibg" >
		<img class="ibg" src='{{Storage::disk('public')->url($otherimages->find(6)->img_src) }}' alt="">
		{{-- <img class="ibg" src='' alt=""> --}}
		
			<div class="carousel__text text-center ">
			<h1 class="wow fadeInUp" style="color: white">First slide label</h1>
			<h3 class="wow fadeInUp" data-wow-delay="1s" style="color: white">Nulla vitae elit libero, a pharetra augue mollis interdum.</h3>
		 </div>
		
	  </div>
	  <div class="carousel-item ibg" >
		
		{{-- <img class="ibg" src='' alt=""> --}}
		<img class="ibg" src='{{Storage::disk('public')->url($otherimages->find(7)->img_src) }}' alt="">
	

		<div class="carousel__text text-center">
			<h1 class="">{{ $slider->find(1)->title }}</h1>
			<h3 class="">{{ $slider->find(1)->shotTitle }}</h3>
		 </div>
	  </div>
	  <div class="carousel-item ibg" >
		
		
		<img class="ibg" src='{{Storage::disk('public')->url($otherimages->find(8)->img_src) }}' alt="">
		<div class="carousel__text text-center">
			<h1 class="">First slide label</h1>
			<h3 class="">Nulla vitae elit libero, a pharetra augue mollis interdum.</h3>
		 </div>
	  </div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
 </div>
