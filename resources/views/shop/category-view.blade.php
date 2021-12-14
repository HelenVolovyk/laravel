@foreach($parentCategories as $parentCategory)
	<div class="ac-block-one mt-4">
		<div class="ac-block__item">
			<div class="ac-block__title"><a class="abs" href="{{route('category.show', [app()->getLocale(), $parentCategory])}}">{{$parentCategory->title}}</a>
			</div>

				@if(count($parentCategory->categories))
			<div class="ac-block__text ">
				@foreach ( $parentCategory->categories as $category )
				<a class="sb pl-4" href="{{route('category.show', [app()->getLocale(), $category])}}">{{$category->title}}</a><br>
				@endforeach
			</div>
			@endif
		</div>
	</div>
@endforeach  

