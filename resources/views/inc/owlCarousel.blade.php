<div class="mt-5 mb-5 ">
	<div class="owl-carousel owl-theme ">
			@foreach($products->chunk(3) as $productChunk)
			@foreach($productChunk as $product)
		
		<div class="it ">
			<div class="lazyOwl">
				@include('shop.product.product_view')
			</div>
		</div>
			@endforeach
			@endforeach 
		
	</div>
</div>

