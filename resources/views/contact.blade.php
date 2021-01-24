@extends('layouts.app')

@section('content')

<div class="content">
	<div class="contect__container-fluid text-center">
  		
	 		<h2 class="mb-3">{{ __('CONTACT') }}</h2>
			 <div class="contact">
<div class="contact__left col-md-4" style="background-image: url(	'http://test.com/storage/images/af6a4c29-9cfb-383d-ba55-50cb598283bc.jpg')">
	
</div>
<div class="contact__right col-md-8">
	<div class="contact__right-content col-md-8 ">
		<h4 class="mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem sed deleniti, mollitia quisquam iusto ipsa saepe vero rem nam maiores harum eum culpa minus id accusamus pariatur tenetur sit veritatis.</h4>
			
		
				<form id="mes" action="{{route('contact.send')}}" method="POST">
					@csrf
					<div class="contact-form">
					<div class="input-fields ">
						<input id="name" class="input" type="text" name="name" placeholder="{{ __('your name') }}">
														
						<input id="email" class="input" type="email" name="email" 
						placeholder="{{ __('your email') }}">
									
						<input id="subject" class="input" type="text" name="subject" placeholder="{{ __('subject') }}">
					</div>
				
					<div class="msg ">
						<textarea name="message" id="message"  class="form-controll" placeholder="{{ __('message') }} "></textarea>
				
						<div class="contact__btn">
						<button type="submit" class="contact__btn">{{ __('send') }}</button>
						</div>
					</div>
					</div>
				</form>
			</div> 
		</div>
		</div>
		</div> 
	</div>

	
   {{-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=151mOkxXsGs5GBiGZ_EHjW7kNURBa9bBo" width="900" height="560"></iframe>  --}}
  

@endsection