<div class="col-sm-6 col-md-12 mb-3">
  <div class="card shadow-sm" >
    
 	 <div class="categ__card-body ibg" class="wow fadeInTopLeft" 	 
		 data-wow-duration="2s">
		<img src="{{Storage::disk('public')->url($parentCategory->thumbnail)}}" class="ibg" alt="">

			<div class="categ__content">
				<h3 class="card-title pb-0 mb-0" >
					<a class="categ__cart-linck text-uppercase font-weight-bold" style="color: white"  href="{{route('category.show', [app()->getLocale(), $parentCategory])}}">	{{$parentCategory->__('title')}}</a>
				</h3>
					
				<p class="card-text font-weight-bold" style="color: white" >{{$parentCategory->__('description')}}</p>
			</div>
	     
    </div>
  </div>
</div>