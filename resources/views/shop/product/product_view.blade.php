<div class="card mb-2" style="border: none" >
   <a  class="cart__link" href="{{route('product', [app()->getLocale(), $product])}}">
     <div class="scale cart-img ">
			<img src="{{Storage::disk('public')->url($product->thumbnail)}}" class="scale card-img-top" alt="..." >
		</div> 
   </a>

	<div class="cart-link">
		<a class="badge badge-pill badge-light flot-right" href="{{route('wishlist.add', [app()->getLocale(), $product])}}"><i class="fa fa-heart-o fa-3x product-heard" aria-hidden="true"></i>
		</a>      
	</div>
      
 
      <div class="card-body">
			<h6 class="card-title text-uppercase" >{{$product->__('name')}}</h6>
		
			<div class="d-flex justify-content-between">
				<div class="">
      		 @include('shop.category-one-view', ['category'=>$product->category()->first()])
				</div>  
				<div>@include('shop.manufacturer-view', ['manufacturer'=>$product->manufacturer()->first()])</div>
			</div>

           
              
         <div class="clearfix">
         	<div class="price">
             	@if($product->discount > 0)
               	<div class="oldPrice" >{{$product->price}} грн</div>
            	@endif
             	<div class="printPrice">{{$product->printPrice()}} грн</div>
            </div>
           
				<div class="d-flex justify-content-center mt-2 mb-2">
            	<form action="{{route('cart.add', [app()->getLocale(), $product])}}" method="POST" class="form-inline" id="button_center">             
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
				  
						<div class="add d-flex">
							<button type="submit" class="btn  card__btn"  id="button_center">
								<span class="add">{{ __('Add to Cart') }}</span>
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
	 
  

  
                