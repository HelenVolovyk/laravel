@extends('layouts.app')
@section('header')
	<title>{{ $metaTitle }}</title>
@endsection

@section('content')
<div class="content">
<div class="container">

	
   
@include('inc.breadcrumb')



    <h2 class="text-uppercase" style="color: #a9bdb9">{{ __('Healthy recipes') }}</h2>
	 
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