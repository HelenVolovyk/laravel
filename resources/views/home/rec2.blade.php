<section id="rec2 wow fadeIn" data-wow-delay="0.2s" >
	<div class="container-fluid ibg mb-5"  style="margin-top: 130px">
		
		<div class="rec2 ibg " 
		style="background-image: url('{{Storage::disk('public')->url($otherimages->find(9)->img_src)}}');">
			<div class="rec__cont wow fadeIn" data-wow-delay="0.4s">
				<p>{{ $content->find(4)->__('text') }}</p>
				<a class="rec__link"  href="{{route( 'recipes', [app()->getLocale()])}}">{{ __('see recipes') }}</a>
			
			</div>
		</div>
	</div>
	
</section>