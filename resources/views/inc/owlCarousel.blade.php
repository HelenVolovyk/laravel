<div class="mt-5 ">
	
	<div class="owl-carousel one">
			@foreach($products->chunk(3) as $productChunk)
			@foreach($productChunk as $product)
		
		<div class="it">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				@include('shop.product.product_view')
			</div>
		</div>
		
			@endforeach
			@endforeach 
		
	</div>
	
</div>

