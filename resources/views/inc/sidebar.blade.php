<aside class="product-section container">
	<div class="sidebar">
				
		<div class="category_link ">
			
			<div class="mb-2">
				<a class="category__link" href="{{route('categories', [app()->getlocale()])}}">
					<span class="sidebar-title">
						{{ __('all categories') }}
					</span>
					
				</a>
			</div>
						
			@include('shop.category-view') 
			
			@include('shop.manufacturers-view') 
		
			@include('shop.price.view')
						
		</div>
	</div>
</aside> 