    
	   <div class="recipe__row">
			<div class="recipe__text right">
		  <h3 class="featurette-heading text-uppercase" style="color: #c7a4ca"> {{ $recipe->__('title') }}</h3>
		  <span class="text-muted">{{ $recipe->shot_description }}</span>
		  <p class="lead mt-5 ">{{$recipe->__('shot_description')}}</p>
	
		  <div class="r__link mt-5">
				<a class="recipes__link " href="{{route('recipe.show', [app()->getLocale(), $recipe] )}}">
					Donec ullamcorper zdfbdbg
				</a>
			</div>
		</div>
		
    
			<div class="recipe__thumbnail ibg" >
				<img class="ibg" src=" {{ Storage::disk('public')->url($recipe->thumbnail)}}" alt="" >
			</div>
    
	 </div>
	


	