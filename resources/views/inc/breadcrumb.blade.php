@php
		$b = explode('/', $_SERVER['REQUEST_URI']);
		$c = array_slice($b, 2); 
		
			$max =  max(array_keys($c));
			
			foreach ($c as $item) {
				$items[] = $item;
			}
		 
		$item_max = array_key_last($c);
@endphp

<div class="container__fluid">
	<div class="shop__container">		
		
		<div class="d-flex justify-content-between">
			<div class="bread">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a class="breadcrumb__link" href="/">{{ __('Home') }}</a></li>



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


					 {{-- @if(count($c) === 1)			
							<li class="breadcrumb-item active" aria-current="page">
								<span style="text-transform: capitalize">{{ __($c[0]) }}</span>
							</li>
						@else 
							 <li class="breadcrumb-item "><a class="breadcrumb__link" href="{{ route( $c[0] , [app()->getLocale()]) }}">
							<span style="text-transform: capitalize">{{ __($c[0]) }}</span>
							</a></li>
								@if (isset($c[1]))
									<li class="breadcrumb-item active" aria-current="page"><span style="text-transform: capitalize">{{ __($c[1]) }}</span></li> 
								@endif
								@if (isset($c[2]))
									<li class="breadcrumb-item active" aria-current="page"><span style="text-transform: capitalize">{{ __($c[2]) }}</span></li> 
								@endif 
			 
				
						@endif  --}}

				</ol>
			</div>
		</div> 

	</div>
</div>


 

