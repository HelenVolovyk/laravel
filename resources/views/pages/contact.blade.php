@extends('layouts.app')
@section('header')
	<title>{{ $metaTitle }}</title>
@endsection

@section('content')

	<div class="content">
				
		@include('inc.breadcrumb')
			
			<h1 class="contact-title text-center text-uppercase " style="color: var(--title)">{{ __('Contact') }}</h1>

		<div class="contact">

				<div class="contact__left ibg" style="background-image: url(	'{{Storage::disk('public')->url($otherimages->find(31)->img_src)}}'">
					 <div class="contact__left-content wow fadeIn text-center" data-wow-duration="2s">
						<p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti est maxime dignissimos rerum. Sint praesentium iste dignissimos officiis vero dolore exercitationem, adipisci obcaecati in possimus!</p>
					
						<p class="">
							<a class="contact-phone"  class="hvr-grow-rotate" href="tel:123-56-78"><i class="fa fa-phone fa hvr-icon fa-2x"></i><span style="color:var(--prima); font-size: 24px; font-weight: bold; "> 123-456-78</span> </a>
						</p>
				
					</div> 
				</div>

				<div class="contact__right">
					<div class="contact__right-content ">

					
						<h3 class="contact__right-content-text mb-5" style="color: var(--new-feel);">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem sed deleniti, mollitia quisquam iusto ipsa saepe vero rem nam maiores harum eum culpa minus id accusamus pariatur tenetur sit veritatis.</h3>
					

				 <form  action="{{route('contact.send')}}" method="POST">
					@csrf
						<div class="contact-form">
							<div class="input-fields ">
								<input id="name" class="input" type="text" name="name" placeholder="{{ __('your name') }}">										
								<input id="email" class="input" type="email" name="email" 
								placeholder="{{ __('your email') }}">										
								<input id="subject" class="input" type="text" name="subject" placeholder="{{ __('subject') }}">
							</div>
				
							<div class="msg">
								<textarea name="message" id="message"  class="form-controll" placeholder="{{ __('message') }} "></textarea>
						
								<div class="contact__sub mt-3">
								<button type="submit" class="btn btn-outline-primary">{{ __('send') }}</button>
								{{-- <button type="submit" class="contact__btn">{{ __('send') }}</button> --}}
								</div>
							</div>

						</div>
					</form> 
			
				</div> 
			</div>
		</div>
	</div>
	
   {{-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=151mOkxXsGs5GBiGZ_EHjW7kNURBa9bBo" width="900" height="560"></iframe>  --}}

@endsection