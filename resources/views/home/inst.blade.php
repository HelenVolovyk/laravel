<div class="inst wow fadeIn" data-wow-duration="2s">
	<div class="container__inst">
		<h2>{{ __('follow us on instagram') }}</h2>
		<p class="text-center">,hjbvhjgvghfcxgfsdxdcfgvhbnj</p>
			<div class="image-gallery">

 {{-- @foreach ($instagrams as $instagram)
	<div class="box-<?php echo($instagram->id) ?>">
		<a href="{{ $instagram->inst_src }}">
			<i class="fa fa-arrows-alt" aria-hidden="true"></i>
		
			<img class="ibg" src="{{Storage::disk('public')->url($src) }}" alt=''> 
		</a>
	</div>
@endforeach  --}}


			
				<div class="box-1 ibg" >
					<a href="https://www.instagram.com/p/CFWv1VtBFqY/">
						<i class="fa fa-arrows-alt" aria-hidden="true"></i>
							 <img class="ibg" src="{{Storage::disk('public')->url($otherimages->find(16)->img_src) }}" alt=''>  
					</a>
				</div>
			
				<div class="box-2 ibg" >
					<a href="https://www.instagram.com/p/CFWv1VtBFqY/">
						<i class="fa fa-arrows-alt" aria-hidden="true"></i>
						<img class="ibg" src="{{Storage::disk('public')->url($otherimages->find(17)->img_src) }}" alt=''>  
					</a>
				</div>
			
				<div class="box-3 ibg" >
					<a href="https://www.instagram.com/p/CFWv1VtBFqY/">
						<i class="fa fa-arrows-alt" aria-hidden="true"></i>
						<img class="ibg" src="{{Storage::disk('public')->url($otherimages->find(18)->img_src) }}" alt=''>   
					</a>
				</div>
			
				<div class="box-4 ibg" >
					<a href="https://www.instagram.com/p/CFWv1VtBFqY/">
						<i class="fa fa-arrows-alt" aria-hidden="true"></i>
						<img class="ibg" src="{{Storage::disk('public')->url($otherimages->find(19)->img_src) }}" alt=''>  
					</a>
				</div>
			
				<div class="box-5 ibg" >
					<a href="https://www.instagram.com/p/CFWv1VtBFqY/">
						<i class="fa fa-arrows-alt" aria-hidden="true"></i>
						<img class="ibg" src="{{Storage::disk('public')->url($otherimages->find(20)->img_src) }}" alt=''>  
					</a>
				</div>
			
				<div class="box-6 ibg" >
					<a href="https://www.instagram.com/p/CFWv1VtBFqY/">
						<i class="fa fa-arrows-alt" aria-hidden="true"></i>
						<img class="ibg" src="{{Storage::disk('public')->url($otherimages->find(21)->img_src) }}" alt=''>  
					</a>
				</div>
			
				<div class="box-7 ibg" >
					<a href="https://www.instagram.com/p/CFWv1VtBFqY/">
						<i class="fa fa-arrows-alt" aria-hidden="true"></i>
						<img class="ibg" src="{{Storage::disk('public')->url($otherimages->find(24)->img_src) }}" alt=''>  
					</a>
				</div>
			
				<div class="box-8 ibg" >
					<a href="https://www.instagram.com/p/CFWv1VtBFqY/"  >
						<i class="fa fa-arrows-alt" aria-hidden="true"></i>
						<img class="ibg" src="{{Storage::disk('public')->url($otherimages->find(23)->img_src) }}" alt=''>  
					</a>
				</div>  

			</div>
	</div>
</div>