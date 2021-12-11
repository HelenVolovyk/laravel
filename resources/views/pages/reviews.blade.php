@extends('layouts.app')
@section('header')
	<title>{{ $metaTitle }}</title>
@endsection

@section('content')
<div class="content">

 
   {{-- <hr class="featurette-divider"> --}}
	 @include('inc.breadcrumb')

	<h2>{{ __('REVIEWS') }}</h2>
	 <div class="container"> 
		<div class="reviews d-flex flex-column">
			<div class="reviews__row d-flex flex-fill pb-5">
				<img class="pr-3" src="{{Storage::disk('public')->url($otherimages->find(13)->img_src) }}" alt='' width="100px" height="100px">
				<div class="reviews__text d-flex flex-column">
					<div class="name d-flex pb-2">
						<span>Name</span>
						<span class="pl-2">01/01/21</span>
					</div>
					
					<p>Lorem ipsum — классический текст-«рыба». Является искажённым отрывком из философского трактата Марка Туллия Цицерона</p>
					
				</div>
			</div>
			<div class="reviews__row d-flex flex-fill pb-5">
				<img class="pr-3" src="{{Storage::disk('public')->url($otherimages->find(13)->img_src) }}" alt='' width="100px" height="100px">
				<div class="reviews__text d-flex flex-column">
					<div class="name d-flex pb-2">
						<span>Name</span>
						<span class="pl-2">01/01/21</span>
					</div>
					
					<p>Lorem ipsum — классический текст-«рыба». Является искажённым отрывком из философского трактата Марка Туллия Цицерона</p>
					
				</div>
			</div>
			<div class="reviews__row d-flex flex-fill pb-5">
				<img class="pr-3" src="{{Storage::disk('public')->url($otherimages->find(13)->img_src) }}" alt='' width="100px" height="100px">
				<div class="reviews__text d-flex flex-column">
					<div class="name d-flex pb-2">
						<span>Name</span>
						<span class="pl-2">01/01/21</span>
					</div>
					
					<p>Lorem ipsum — классический текст-«рыба». Является искажённым отрывком из философского трактата Марка Туллия Цицерона</p>
					
				</div>
			</div>
			<div class="reviews__row d-flex flex-fill pb-5">
				<img class="pr-3" src="{{Storage::disk('public')->url($otherimages->find(13)->img_src) }}" alt='' width="100px" height="100px">
				<div class="reviews__text d-flex flex-column">
					<div class="name d-flex pb-2">
						<span>Name</span>
						<span class="pl-2">01/01/21</span>
					</div>
					
					<p>Lorem ipsum — классический текст-«рыба». Является искажённым отрывком из философского трактата Марка Туллия Цицерона</p>
					
				</div>
			</div>
			<div class="reviews__row d-flex flex-fill pb-5">
				<img class="pr-3" src="{{Storage::disk('public')->url($otherimages->find(13)->img_src) }}" alt='' width="100px" height="100px">
				<div class="reviews__text d-flex flex-column">
					<div class="name d-flex pb-2">
						<span>Name</span>
						<span class="pl-2">01/01/21</span>
					</div>
					
					<p>Lorem ipsum — классический текст-«рыба». Является искажённым отрывком из философского трактата Марка Туллия Цицерона</p>
					
				</div>
			</div>
			<div class="reviews__row d-flex flex-fill pb-5">
				<img class="pr-3" src="{{Storage::disk('public')->url($otherimages->find(13)->img_src) }}" alt='' width="100px" height="100px">
				<div class="reviews__text d-flex flex-column">
					<div class="name d-flex pb-2">
						<span>Name</span>
						<span class="pl-2">01/01/21</span>
					</div>
					
					<p>Lorem ipsum — классический текст-«рыба». Является искажённым отрывком из философского трактата Марка Туллия Цицерона</p>
					
				</div>
			</div>

		</div>
	</div>
</div>
@endsection