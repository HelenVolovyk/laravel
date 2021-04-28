
{{-- 
 @foreach($product->images as $image)
 @endforeach
 <div class="slider-for">
	 <div class="product1">
		<img src="{{Storage::disk('public')->url($image->path)}}" height="350" width="350"/> 
	 </div>
	 <div class="product1">
		<img src="{{Storage::disk('public')->url($image->path)}}" height="350" width="350"/> 
	 </div>
	 <div class="product1">
		<img src="{{Storage::disk('public')->url($image->path)}}" height="350" width="350"/> 
	 </div>
</div>

 <div class="slider-nav">
	 <div class="product2">
		<img src="{{Storage::disk('public')->url($image->path)}}" height="350" width="350"/> 
	 </div>
	 <div class="product2">
		<img src="{{Storage::disk('public')->url($image->path)}}" height="350" width="350"/> 
	 </div>
	 <div class="product2">
		<img src="{{Storage::disk('public')->url($image->path)}}" height="350" width="350"/> 
	 </div>
	
	
 </div>  --}}

 <div class="aa ibg">
	<img id=featured class="ibg" src="{{Storage::disk('public')->url($product->thumbnail)}}">
</div>


<div id="slide-wrapper" >


	<div id="slider">
		@foreach($product->images as $image)
		<img src="{{Storage::disk('public')->url($image->path)}}" height="350" width="350"/>
		@endforeach
	</div>
	

	{{-- <div id="slider">
		
		<img class="thumbnail active" src="img/7-минут2.jpg">
		<img class="thumbnail" src="img/IMG_3555.JPG">
		<img class="thumbnail" src="img/IMG_3573.JPG">
		<img class="thumbnail" src="img/IMG_3573.JPG">

	
	</div> --}}


</div>