 @extends('layouts.app')
 @inject('wishlist', 'App\Services\WishlistService')

@section('content')
<div class="container">
<div class="content">

{{-- 
	{{$product=Product::where('images_id', $image->id)->get()}}  --}}
	{{-- {{ Storage::disk('public')->$filePath}} --}}
	{{-- {{Storage::disk('public')->url($product->images()->pluck('path'))}}  --}}
	
<div class="row justify-content-center">
  <div class="col-md-4 mb-3">
	 <h3 class="text-center">{{ $product->__('name') }}</h3>
  </div>
  
	
	
<hr>

<div class="row">
  <div class="col-md-6">
	<div class="card md-4 shadow-sm" >

 		@if(Storage::disk('public')->has($product->thumbnail)) 
			<img src="{{Storage::disk('public')->url($product->thumbnail)}}" class="card-img-top" alt="">
		 @endif
		
			<div class="cart-link">
				<a class="badge badge-pill badge-light flot-right" href="{{route('wishlist.add', $product)}}"><i class="fa fa-heart-o fa-3x" aria-hidden="true"></i></a>
			</div>
			
	</div>
  </div>

  <div class="col-md-6 pl-5">
    @if($product->discount > 0)
		<p style="color: red; text-decoration: line-through">{{ __('Old Price: ') }}
			 {{$product->price}} грн</p>
    @endif
      <p>{{ __('PRICE: ') }}<strong>{{$product->printPrice()}} грн</strong></p>
      <p>SKU: {{$product->SKU}}</p>
      <p>{{ __('IN STOCK: ') }}
			<strong> {{$product->quantity}}</strong></p>
      <hr>
       
        <div class="product_category">
			 <div>{{ __('Product Categories') }}</div>
          <div>@include('shop.category-view', ['category'=>$product->category()->first()])</div>
        </div>
        <hr>
           @if($product->usersRated() > 0)
           <p>{{ __('Rating:')  }}
				  {{round($product->averageRating(), 1) ?? 0}} /5 ({{$product->usersRated()}})</p>
           @endif
        
    
      @if($product->quantity > 0)
      <hr>
      <div class="">
        <p>{{ __('Quantity') }}</p>
       
      <form action="{{route('cart.add', $product)}}" method="POST" class="form-inline" >
        @csrf
        @method('post')
        <div class="form-froup  mb-2">
          <input type="hidden" name="price_with_discount" value="">
          <label for="product_count" class="sr-only">Count</label>
           <input type="number"
                  name="product_count"
                  class="form-content"
                  id="product_count"
                  min="1"
                  max="{{$product->quantity}}"
                  value="1"
                  style="width: 55px; height: 35px; margin-right:10px"> 

		  </div> 

		  <div>@include('shop.units-view', ['units'=>$product->units()->first()])</div>

        <button type="submit" class="btn btn-primary mb-2 ml-5">{{ __('Add to Cart') }}</button>
		</form>
		
	    </div>
  @endif
  <hr>
  
@include('shop.product.accordion')
		
			
 @auth   
 <div class="row pl-3">
 	<div class="">{{ __('Evaluate a product') }}</div>

 
		<div class="form-group required pl-5">
			<form class="form-horizontal poststars" action="{{route('rating.add', $product)}}" id="addStar" method="POST">
			@csrf
  

    @if($product->getUserProductRating()!==false) 
    @for($i=1; $i<=5; $i++)
      <input class ="star star-{{$i}}"
              value="{{$i}}"
              id="star-{{$i}}"
              type="radio"
              name="star"
             @if($i == $product->getUserProductRating()) checked ="checked" @endif
              />
              <label class="star star-{{$i}}" for="star-{{$i}}"></label>
            @endfor
     @else   
        <input class="star star-1" value="1" id="star-1" type="radio" name="star">
        <label class="star star-1" for="star-1"></label> 
        <input class="star star-2" value="2" id="star-2" type="radio" name="star">
        <label class="star star-2" for="star-2"></label> 
        <input class="star star-3" value="3" id="star-3" type="radio" name="star">
        <label class="star star-3" for="star-3"></label> 
        <input class="star star-4" value="4" id="star-4" type="radio" name="star">
        <label class="star star-4" for="star-4"></label> 
        <input class="star star-5" value="5" id="star-5" type="radio" name="star">
        <label class="star star-5" for="star-5"></label> 
       
     @endif 
      
			
			</form>
		@endauth  
		</div>
	</div>
  
  
		<div class="col-md-12">
				<p style="margin-top: 2%">{{ __('DESCRIPTION:') }} </p>
				<p>{{$product->__('description')}}</p>
		</div>
		
				<div class="mt-3">
						@if(!empty($vote->rating)){
							@include('comments.index', ['comments'=>$comments, 'product'=>$product]) 
						}
						@else 
							<div class="col-md-12">
								<p>{{ __('COMMENTS:') }}</p>
								<p>{{ __('This product has no comments yet') }} </p>
							</div>
					
							@endif
					</div>
				</div>
			</div>
		</div> 
	</div>
</div>

<p style="margin-top: 2%; text-align:center; margin-bottom: 2%">{{ __('YOU MAY ALSO LIKE:') }} </p>  
	<div class="container-fluid">
	
		<div class="sentence">
		
		
				@foreach($products->chunk(5) as $productChunk)
				
					@foreach($productChunk as $product)

						@include('shop.product.product_shop_view')

					@endforeach
				@endforeach
			
		</div>
	</div>



			<script>
				$(function(){
				$('#addStar').change('.star', function(e){
					$(this).submit();
				});
				});
			</script>



@endsection




