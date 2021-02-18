<div class="mt-5 mb-5 wow fadeInUp">
	
	<div class="owl-carousel owl-theme">
			@foreach($products->chunk(3) as $productChunk)
			@foreach($productChunk as $product)
		
		<div class="it">
			<div class="c">
				@include('shop.product.product_view')
			</div>
		</div>
		
			@endforeach
			@endforeach 
		
	</div>
</div>

