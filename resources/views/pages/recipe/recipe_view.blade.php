<div class="recipe__row">

  	<div class="recipe__thumbnail ibg" >
		<img class="ibg" src=" {{ Storage::disk('public')->url($recipe->thumbnail)}}" alt="" >
	</div>

      <div class="recipe__text left">
			<h3 class="featurette-heading text-uppercase recipe__title" style="color: var(--recipe-title);">{{ $recipe->__('title') }} </h3>
			<p class=" ">{{ $recipe->shot_description }}</p>
			
			 
			<div class="r__link mt-5">
				<a class="recipes__link" style="color: var(--recipe-title);"  href="{{route('recipe.show', [app()->getLocale(), $recipe])}}">
						{{ __('more details') }}
				</a>
			</div>
		</div>
     
</div>
	 
