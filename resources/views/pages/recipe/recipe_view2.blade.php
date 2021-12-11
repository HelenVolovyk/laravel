 <div class="recipe__row">
	 
	<div class="recipe__text right">
		  <h3 class="featurette-heading text-uppercase" style="color: #c7a4ca"> {{ $recipe->__('title') }}</h3>
		  	<span class="text-muted">{{ $recipe->shot_description }}</span>
		
				<div class="r__link mt-5">
					<a class="recipes__link " href="{{route('recipe.show', [app()->getLocale(), $recipe] )}}">
						{{ __('more details') }}
					</a>
				</div>
	</div>
	    
	<div class="recipe__thumbnail ibg" >
			<img class="ibg" src=" {{ Storage::disk('public')->url($recipe->thumbnail)}}" alt="" >
	</div>

</div>
	


	