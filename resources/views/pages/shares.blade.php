@extends('layouts.app')
@section('header')
	<title>{{ $metaTitle }}</title>
@endsection

@section('content')
	<div class="content">
		
		@include('inc.breadcrumb')
	
		<h1 style="color: var(--title)">{{ __('SHARES') }}</h1>
			
		<div class="container">
			<div class="jumbotron ibg p-4 p-md-5 text-white rounded jum__shar" >
				<img class="ibg" src="{{Storage::disk('public')->url($otherimages->find(5)->img_src)}}" alt="">
					<div class="shares-block col-md-6 px-0 pt-5">
						<div class="shares-text">
							<h2 class="display-4 text-white font-italic">Title of a longer featured blog post</h2>
							<p class="text-white my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
						</div>
					</div>
			</div>
			
			<div class="mt-5">
				<p class="shares">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro delectus ipsam nulla praesentium, excepturi deserunt consequatur eos accusamus sed nesciunt, quidem fugit iusto deleniti rem aliquam dolores quia repellendus ipsum.</p>
				<p class="shares">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro delectus ipsam nulla praesentium, excepturi deserunt consequatur eos accusamus sed nesciunt, quidem fugit iusto deleniti rem aliquam dolores quia repellendus ipsum.</p>
			</div>
					
			<div class="text-right button-container mt-5 mb-5">
				<a href="/shop" class="" style="color: var(--prima)">{{ __('View more products') }}</a>
			</div>
		</div>
	</div>
	
@endsection