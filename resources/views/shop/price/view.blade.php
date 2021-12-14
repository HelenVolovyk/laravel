<div class="ac-block-one mt-5">
	<div class="ac-block__item">
		<div class="ac-block__title">
			<a href="">
				<span class="sidebar-title">
					{{ __('price')}}
				</span>
			</a>
		</div>

			<div class="ac-block__text ">
				<div class="pb-2 pl-4">
					<a class="categ__cart-linck sb" href="{{route('shop.priceUp', [app()->getLocale()])}}">{{ __('up') }}</a>
				</div>
				<div class="pb-2 pl-4">
					<a class="categ__cart-linck sb" href="{{route('shop.priceDown', [app()->getLocale()])}}">{{ __('down') }}</a>
				</div>
			</div>
				
	</div>
</div>