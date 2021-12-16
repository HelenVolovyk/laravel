<div class="products text-center">
	@foreach($products->chunk(6) as $productChunk)
		<div class="row">
			@foreach($productChunk as $product) 
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
				@include('shop.product.product_view') 
			</div>
			@endforeach
		</div>
	@endforeach
</div>

<div class="mt-3">
	{{$products->links()}}
</div>