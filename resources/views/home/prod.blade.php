<div class="home__product-container">
	<div class="products__three mt-5">
	
		@foreach ($recommended as $n => $product)
		<a   href="{{route('product.show', [app()->getLocale(), $product->webname])}}" class="recom">
			<div class="home__product  ibg wow fadeInRight" 
				@if($n % 3 == 1)
				data-wow-delay="0.2s"
				@endif
				@if($n % 3 == 2)
				data-wow-delay="0.4s"
				@endif
			>
						<img class="ibg" src="{{Storage::disk('public')->url($product->thumbnail)}}"  alt="">  
					
						<div class="fon">
							<div class="fon__name">
								{{ $product->name }}
							</div>
						
							<div class="price fon__price">
								@if($product->discount > 0)
								  <p  style="color: var(--oran-b); text-decoration: line-through; text-transform: uppercase; ">{{$product->price}} грн</p>
								@endif
								<div class="fon__printPrice pl-3">
									<p>{{$product->printPrice()}} грн</p>
									</div>
							  </div>
							  <div class="fon__details">
								{{ __('more details') }}
							  </div>
							  
						</div>
			</div>
		
		</a>

		@endforeach
	
	
	</div>
</div> 