@extends('layouts.app')
@section('header')
	<title>{{ $metaTitle }}</title>
@endsection

@section('content')

	<div class="">
		@include('inc.breadcrumb')
		<h2 class="recipes-title text-uppercase " style="color: var(--title);" >{{ __('Healthy recipes') }}</h2>

		<div class="container">	
			
			<div class="recipes__body">
				@foreach ($recipes as $recipe)
					@if ($recipe->id % 2)
						@include('pages.recipe.recipe_view2')
					@else
						@include('pages.recipe.recipe_view')
					@endif
				@endforeach
			</div>
			
		</div>
	</div>
@endsection