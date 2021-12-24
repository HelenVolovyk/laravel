 @extends('layouts.app')
 @inject('wishlist', 'App\Services\WishlistService')

@section('content')
<div class="content">

	@include('inc.breadcrumb')

	<div class="container">	
		<div class="row justify-content-center">
			<div class="col-md-4 mb-3">
				<h2 class="text-center text-uppercase  mt-3 mb-2" style="font-weight:bolder; color: var(--prima);">{{ ($product->__('name'))  }}</h2>
			</div>
  
		<hr>

		<div class="row">
			<div class="col-md-6">
				<div class="card md-4 shadow-sm" >
					@if(Storage::disk('public')->has($product->thumbnail)) 
						<img src="{{Storage::disk('public')->url($product->thumbnail)}}" class="card-img-top" alt="">
					@endif
					
					<div class="cart-link">
						<a class="badge badge-pill badge-light flot-right" href="{{route('wishlist.add', [app()->getlocale(), $product])}}"><i class="fa fa-heart-o fa-3x product-heard" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>

		<div class="col-md-6 pl-5">
			@if($product->discount > 0)
				<p  class="oldPrice" >{{ __('Old Price: ') }}
					{{ $product->price }} грн</p>
			@endif
				<p class="print" style="color: var(--gr)">{{ __('PRICE:' ) }}
					<strong class="pl-2" style="color: var(--new-blue)">{{ $product->printPrice() }} грн</strong>
				</p>
				<p class="print" style="color: var(--gr)">sku: {{$product->SKU}}</p>
				<p class="print" style="color: var(--gr)">{{ __('IN STOCK:' ) }}
					<span class="pl-2"> {{ $product->quantity }}</p></p>
				<hr>
				
				<div class="product_category">
					<p class="show">{{ __('Product Categories') }}</p>
						<div>
							@include('shop.category-one-view', ['category'=>$product->category()->first()])
						</div>
				</div>
       
				<div class="product_manufacturer">
					<p class="show">{{ __('Manufacturer country') }}</p>
					<div class="pr-0">
						@include('shop.manufacturer-view', ['manufacturer'=>$product->manufacturer()->first()])
					</div>
				</div>
		  
				<hr>
					@if($product->usersRated() > 0)
						<p>{{ __('Rating:')  }}
						{{round($product->averageRating(), 1) ?? 0}} /5 ({{$product->usersRated()}})</p>
					@endif
        
    
      @if($product->quantity > 0)
      <hr>
      <div class="">
        <p class="print">{{ __('Quantity') }}</p>
       
			<form action="{{route('cart.add',[app()->getlocale(), $product])}}" 	method="POST" class="form-inline" >
			@csrf
			@method('post')
			<div class="form-froup  mb-2">
				<input type="hidden" name="price_with_discount" value="">
				<label for="product_count" class="sr-only">Count</label>
				<input type="number"
							name="product_count"
							class="form-content"
							id="c"
							min="1"
							max="{{$product->quantity}}"
							value="1"
							style="width: 55px; height: 35px; margin-right:10px"> 

			</div> 

				<div>
					@include('shop.units-view', ['units'=>$product->units()->first()])
				</div>

				<button type="submit" class="btn btn-primary btn-lg mb-2 ml-5">
					<span class="buy">	{{ __('Add to Cart') }}</span>
				</button>
			</form>
		
	    </div>
  		@endif
  		<hr>
  
		@include('shop.product.accordion')
		
			
 		@auth   
		<div class="row pl-3">
			<div class="">{{ __('Evaluate a product') }}</div>

		
				<div class="form-group required pl-5">
					<form class="form-horizontal poststars" action="{{route('rating.add', [app()->getlocale(), $product])}}" id="addStar" method="POST">
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
  </div>
  
	<div class="about__product-wrapper mt-5">
		<div class="tabs-wrapper">
			<input class="tab-input" type="radio" name="tabs" id="tab-1" checked>
			<input class="tab-input" type="radio" name="tabs" id="tab-2">
			<label class="tab tab-1" for="tab-1">
				<span style="font-family: 'Prosto One', cursive;">
					{{ __('DESCRIPTION:') }}
				</span>
			</label>
			<label class="tab tab-2" for="tab-2">
				<span style="font-family: 'Prosto One', cursive;">
					{{ __('COMMENTS:') }}
				</span>
			</label>
				<div class="tabs__content content-1">
					<p>{{$product->__('description')}}</p>
				</div>
			<div class="tabs__content content-2">
				@if(!empty($vote->rating)){
					@include('comments.index', ['comments'=>$comments, 'product'=>$product])}
				@else 
					<div class="col-md-12">
						<p>{{ __('This product has no comments yet') }} </p>
					</div>
				@endif

				<a href="" class="reply">reply</a>



					@push('footer-scripts')
						
						<script>
							$(function(){
								$(document).on('click', '.reply', function(e){
								e.preventDefault();
				
								// alert($(this).data('parent_id'));
								$(this).append(`<form action="{{route('comments.add', [app()->getlocale(), $product])}}" method="POST"  style="margin: 16px auto; border: 1px solid #333; padding: 16px; width: 50%;">
									@csrf
									<h6>New comment</h6>
									<input type="hidden" name="parent_id" id="parent_id">
									<hr>
									<textarea name="comment" id="comment" class="form-control" rows="10"></textarea>
									<button type="submit" class="btn btn-outline-primary form-control mt-3">Add comment</button>
									</form>`);  
							// alert(userName);
				
									$('#parent_id').val($(this).data('parent_id'));
									$('#comment').val('@${userName} ');
									// $('html, body').animate({
									//   scrollTop: $("#comment").offset().top - 40
									// }, 2000);
									// $('#comment').focus();
							
									});
								});
						</script>
					@endpush

			</div>
		</div>
	</div>



					
			</div>
		</div> 
	</div>
</div>



		<p style="margin-top: 6%; text-align:center; color: var(--new-blue); font-family: 'Prosto One', cursive; ">{{ __('YOU MAY ALSO LIKE:') }}
		</p>  
		
		<div class="col-sm-12 g-0 ">
			@include('inc.owlCarousel')
		</div>



			<script>
				$(function(){
				$('#addStar').change('.star', function(e){
					$(this).submit();
				});
				});
			</script>



@endsection




