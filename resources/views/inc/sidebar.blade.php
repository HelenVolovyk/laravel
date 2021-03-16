<aside class="product-section container">
	<div class="sidebar">

		<div class="category__link ">
			<div class=" pb-2">
				<a class="category__link" href="{{route('category.index')}}">{{ __('all categories') }}
				</a>
			</div>
		
				@each('shop.category-view', $categories, 'category') 
		
		</div>
	</div>	
</aside>

				{{-- <div class="ac-category">
					<div class="ac-block-one">
						<div class="ac-block__item">
							<div class="ac-block__title">
								<a class="category__link" href="{{route('category.index')}}">{{ __('all categories') }}
								</a>
							</div>
								<div class="ac-block__text">
									@each('shop.category-view', $categories, 'category') 
								</div>
							</div>
					</div>
				</div> --}}