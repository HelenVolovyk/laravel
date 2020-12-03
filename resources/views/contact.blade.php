@extends('layouts.app')

@section('content')


<div class="container text-center">
  <div class="col-md-12">
	 <h2 class="mb-3">{{ __('CONTACT') }}</h2>


	


	 <div class="col-md-4 text-left">
		<form action="{{route('contact.send')}}" method="POST">
			@csrf
			<div class="form-group">
				<label for="name">{{ __('Name') }}</label>
				<input id="name" class="form-control" type="text" name="name" placeholder="{{ __('your name') }}">
			</div>
			<div class="form-group">
				<label for="email">email</label>
				<input id="email" class="form-control" type="email" name="email" 
				placeholder="{{ __('your email') }}">
			</div>
			<div class="form-group">
				<label for="subject">{{ __('Subject') }}</label>
				<input id="subject" class="form-control" type="text" name="subject" placeholder="{{ __('subject') }}">
			</div>
			<div class="form-group">
				<label for="message">{{ __('Message') }}</label>
			<textarea name="message" id="message"  class="form-controll" placeholder="{{ __('message') }}"></textarea>
			</div>
			<button type="submit" class="btn btn-success">{{ __('send') }}</button>

			
		</form>
	</div> 
</div> 


	
   <iframe src="https://www.google.com/maps/d/u/0/embed?mid=151mOkxXsGs5GBiGZ_EHjW7kNURBa9bBo" width="900" height="560"></iframe> 
  </div>

@endsection