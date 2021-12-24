@php
		$b = explode('/', $_SERVER['REQUEST_URI']);
		$c = array_slice($b, 2); 
	
		$max =  max(array_keys($c));
		$item_max = array_key_last($c);

		foreach ($c as $item) {
			$items[] = $item;
		}
		
@endphp


<div class="container__fluid">
	<div class="shop__container">		
		
		<div class="d-flex justify-content-between">
			<div class="bread">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a class="breadcrumb__link" href="{{ url('/') }}">{{ __('Home') }}</a></li>

					@if ($max = 0)
							<li class="breadcrumb-item active" aria-current="page">
								<span style="text-transform: capitalize">{{ __($item) }}</span>
							</li> 
					@else

						@foreach ($items as $key =>$item)
							@if ($key != array_key_last($items))
								<li class="breadcrumb-item "><a class="breadcrumb__link" href="{{ route( $item , [app()->getLocale()]) }}">
								<span style="text-transform: capitalize">{{ __($item) }}</span></a>
								</li>
									
								@else
								<li class="breadcrumb-item active" aria-current="page"><span style="text-transform: capitalize">{{ __($item) }}</span></li>  
								
							@endif
						@endforeach
						
					@endif 

				</ol>
			</div>
		</div> 

	</div>
</div>


 

