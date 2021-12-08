<div class="col-sm-6 col-md-4 ">
{{-- <div class="col-sm-6 col-md-4 col-lg-4 "> --}}
	<div class="card" >
			  
		 <a href="{{route('product.show', [app()->getlocale(), $product])}}">
	
			<div class="scale cart-img ">
					<img src="{{Storage::disk('public')->url($product->thumbnail)}}" class="scale card-img-top" alt="..." ></div> 
		</a>
			<div class="cart-link">
						  
				 <a class="badge badge-pill badge-light flot-right" href="{{route('wishlist.add', [app()->getlocale(), $product])}}"><i class="fa fa-heart-o fa-2x" aria-hidden="true"></i></a>
								 
			</div>
			
	 
			<div class="card-body">
				<h5 class="card-title">{{$product->__('name')}}</h5>
			
					<div class="">
					 @include('shop.category-one-view', ['category'=>$product->category()->first()])
					</div>  
					<div>@include('shop.manufacturer-view', ['manufacturer'=>$product->manufacturer()->first()])</div>
			
				
				  
					  
				  <div class="clearfix">
					 <div class="price">
					 @if($product->discount > 0)
						<small style="colorrgb(221, 1, 74); text-decoration: line-through">{{$product->price}} грн</small>
					 @endif
					 <div class="printPrice">{{$product->printPrice()}} грн</div>
					</div>
				  
					<div class="d-flex justify-content-center mt-3">
					 <form action="{{route('cart.add', [app()->getlocale(), $product])}}" method="POST" class="form-inline" id="button_center">             
					  @method('POST')
					  @csrf
					  <div class="form-froup  mb-2">
						 <input type="hidden" name="price_with_discount" value="">
						 <label for="product_count" class="sr-only">Count</label>
						  <input type="hidden"
									name="product_count"
									class="form-content"
									id="product_count"
									min="1"
									max="1"
									value="1"
								 > 
			
					  </div> 
					 
					
					
						 <button type="submit" class="btn  card__btn text-uppercase" style="color: #6cb2eb; font-weight: bold; letter-spacing: 0.5px;" id="button_center">{{ __('Add to Cart') }}
						</button> 
						<div class="btn__line">
							<div class="block1"></div>
							<div class="block2"></div>
						</div>
	
						</div>
					</form>
	
	
			</div>
			
		</div>
			
	</div>
</div>
	
	  
						 
  
                