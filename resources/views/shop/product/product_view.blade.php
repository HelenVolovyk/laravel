
   <div class="col-sm-6 col-md-4">
	
   {{-- <div class="col-sm-4 col-md-3"> --}}
     {{-- <div class="card shadow-sm" > --}}
     <div class="card" style="border: none" >
        <a  class="cart__link" href="{{route('product.show', $product)}}">
          <div class="scale cart-img ">
				<img src="{{Storage::disk('public')->url($product->thumbnail)}}" class="scale card-img-top" alt="..." >
			</div> 
        </a>

        <div class="cart-link">
          
			 <a class=" badge badge-pill badge-light flot-right" href="{{route('wishlist.add', $product)}}"><i class="fa fa-heart-o fa-2x" aria-hidden="true"></i>
			</a>
                      
        </div>
      
 
       <div class="card-body">
			<h5 class="card-title">{{$product->__('name')}}</h5>
			{{-- <div class="cart-description">
			 	<p class="card-text">{{$product->__('shot_description')}}</p>
			</div> --}}
				<div class="">
      		 @include('shop.category-view', ['category'=>$product->category()->first()])
				</div>  
           
              
           <div class="clearfix ">
             <div class="price">
             @if($product->discount > 0)
               <small style="color: red; text-decoration: line-through">{{$product->price}} грн</small>
             @endif
             <div class="printPrice">{{$product->printPrice()}} грн</div>
            </div>
           
				<div class="d-flex justify-content-center mt-3">
             <form action="{{route('cart.add', $product)}}" method="POST" class="form-inline" id="button_center">             
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
				 
				<button type="submit" class="btn  mt-2 card__btn" id="button_center">{{ __('Add to Cart') }}
				</button> 

				
            </div>
               </form>


			  </div>
		
		 </div>
		
     </div>
    </div>

  
                