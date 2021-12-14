<div class="ac-block-one mt-5">
	<div class="ac-block__item">
		<div class="ac-block__title">
			<a href="">
				<span class="sidebar-title">
					{{ __('manufacturer')}}
				</span>
			</a>	
		</div>
		<div class="ac-block__text ">

			@foreach($manufacturers as $manufacturer)
				<div class="pl-4">
					@include('shop.manufacturer-view')
				</div>
			@endforeach  
			
		</div>
	</div>

</div>


