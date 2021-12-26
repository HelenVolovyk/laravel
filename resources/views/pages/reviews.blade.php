@extends('layouts.app')
@section('header')
	<title>{{ $metaTitle }}</title>
@endsection

@section('content')
<div class="">
	@include('inc.breadcrumb')

	<h2  class="pb-3" style="color: var(--title);">{{ __('REVIEWS') }}</h2>
	 <div class="container"> 
		<div class="reviews d-flex flex-column">
			<div class="reviews__row d-flex flex-fill pb-5">
				<img class="pr-3 reviews" src="{{Storage::disk('public')->url($otherimages->find(13)->img_src) }}" alt=''>
				<div class="reviews__text d-flex flex-column pl-3">
					<div class="reviews-name d-flex pb-2">
						<span >Name</span>
						<span class="pl-2" >01/01/21</span>
					</div>
					
					<p class="pr-3">Lorem ipsum — классический текст-«рыба». Является искажённым отрывком из философского трактата Марка Туллия Цицерона</p>
					
				</div>
			</div>
			<div class="reviews__row d-flex flex-fill pb-5">
				<img class="pr-3 reviews" src="{{Storage::disk('public')->url($otherimages->find(13)->img_src) }}" alt='' width="100px" height="100px">
				<div class="reviews__text d-flex flex-column pl-3">
					<div class="reviews-name d-flex pb-2">
						<span>Name</span>
						<span class="pl-2">01/01/21</span>
					</div>
					
					<p class="pr-3">Lorem ipsum — классический текст-«рыба». Является искажённым отрывком из философского трактата Марка Туллия Цицерона</p>
					
				</div>
			</div>
			<div class="reviews__row d-flex flex-fill pb-5">
				<img class="pr-3 reviews" src="{{Storage::disk('public')->url($otherimages->find(13)->img_src) }}" alt='' width="100px" height="100px">
				<div class="reviews__text d-flex flex-column pl-3">
					<div class="reviews-name d-flex pb-2">
						<span>Name</span>
						<span class="pl-2">01/01/21</span>
					</div>
					
					<p class="pr-3">Lorem ipsum — классический текст-«рыба». Является искажённым отрывком из философского трактата Марка Туллия Цицерона</p>
					
				</div>
			</div>
			<div class="reviews__row d-flex flex-fill pb-5">
				<img class="pr-3 reviews" src="{{Storage::disk('public')->url($otherimages->find(13)->img_src) }}" alt='' width="100px" height="100px">
				<div class="reviews__text d-flex flex-column pl-3">
					<div class="reviews-name d-flex pb-2">
						<span>Name</span>
						<span class="pl-2">01/01/21</span>
					</div>
					
					<p class="pr-3">Lorem ipsum — классический текст-«рыба». Является искажённым отрывком из философского трактата Марка Туллия Цицерона</p>
					
				</div>
			</div>
			<div class="reviews__row d-flex flex-fill pb-5">
				<img class="pr-3 reviews" src="{{Storage::disk('public')->url($otherimages->find(13)->img_src) }}" alt='' width="100px" height="100px">
				<div class="reviews__text d-flex flex-column pl-3">
					<div class="reviews-name d-flex pb-2">
						<span>Name</span>
						<span class="pl-2">01/01/21</span>
					</div>
					
					<p class="pr-3">Lorem ipsum — классический текст-«рыба». Является искажённым отрывком из философского трактата Марка Туллия Цицерона</p>
					
				</div>
			</div>
			<div class="reviews__row d-flex flex-fill pb-5">
				<img class="pr-3 reviews" src="{{Storage::disk('public')->url($otherimages->find(13)->img_src) }}" alt='' width="100px" height="100px">
				<div class="reviews__text d-flex flex-column pl-3">
					<div class="reviews-name d-flex pb-2">
						<span>Name</span>
						<span class="pl-2">01/01/21</span>
					</div>
					
					<p class="pr-3">Lorem ipsum — классический текст-«рыба». Является искажённым отрывком из философского трактата Марка Туллия Цицерона</p>
					
				</div>
			</div>

		</div>
	</div>
</div>
@endsection