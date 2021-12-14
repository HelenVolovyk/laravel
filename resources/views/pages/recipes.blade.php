@extends('layouts.app')
@section('header')
	<title>{{ $metaTitle }}</title>
@endsection

@section('content')

	<div class="content">
	
		@include('inc.breadcrumb')

		<h2 class="text-uppercase mb-5" style="color: var(--title);" >{{ __('Healthy recipes') }}</h2>

		<div class="container">	
			
			@foreach ($recipes as $recipe)
				@if ($recipe->id % 2)
					@include('pages.recipe.recipe_view2')
				@else
					@include('pages.recipe.recipe_view')
				@endif
			@endforeach
		
		</div>
	</div>
@endsection