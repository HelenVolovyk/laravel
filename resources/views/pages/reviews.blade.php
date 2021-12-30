@extends('layouts.app')
@section('header')
	<title></title>
@endsection

@section('content')
<div class="">
	@include('inc.breadcrumb')

	<h2  class="pb-3" style="color: var(--title);">{{ __('REVIEWS') }}</h2>
	 <div class="container"> 
		<div class="reviews d-flex flex-column">
			@foreach ($comments as $comment)
			@php
				$user = App\Models\User::where('id', $comment->user->id)->first();
				$commenti = $comment->comment;
			@endphp
	
	 			<div class="reviews__row d-flex flex-fill pb-5">
					<img class="pr-3 reviews" src="{{Storage::disk('public')->url($otherimages->find(13)->img_src) }}" alt=''>
					<div class="reviews__text d-flex flex-column pl-3">
						<div class="reviews-name d-flex pb-2">
							<span >{{  $user->name }}</span>
							<span class="pl-2" >{{  $comment->created_at }}</span>
						</div>
						<p class="pr-3">{{ $commenti }}</p>
					</div>
				</div>
			@endforeach

		</div>
	</div>
</div>
@endsection