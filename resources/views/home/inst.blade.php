<div class="inst wow fadeIn" data-wow-duration="2s">
	<div class="container__inst">
		<h2>{{ __('follow us on instagram') }}</h2>
		<p class="text-center">,hjbvhjgvghfcxgfsdxdcfgvhbnj</p>
			<div class="image-gallery">


			@foreach ($instagrams as $instagram)
				<div class="ibg box-<?php echo($instagram->id) ?>">
					<a href="{{ $instagram->inst_src }}">
						<i class="fa fa-arrows-alt" aria-hidden="true"></i>
					
						<img class="ibg" src="{{Storage::disk('public')->url($instagram->otherimages->img_src) }}" alt=''> 
					</a>
				</div>
			@endforeach 


			</div>
	</div>
</div>