<footer>
	
	<div class="jumbotron jumbotron-fluid ibg text-center  wow fadeIn">
		{{-- <img class="ibg" src="{{Storage::disk('public')->url('4l/p5/t0/dF/xPrd1gUp9dalHCVL_1638733162.jpg')}}" alt=""> --}}
		<img class="ibg" src="{{Storage::disk('public')->url('Ck/pY/8P/FR/pHOnmpsT2KSRm4od_1638822600.jpg')}}" alt="" width="50px" height="50px" >
	
		<div class="container text-center">
			
		  <h6 class="subscrib pb-2">{{ __('we do not spam our subscribers') }}</h6>
		  <p class="subscriber pb-3">{{ __('but we want them to know about everything first') }}</p>
			<div class="col md-6 pb-3">
				<form action="{{route('contact.send')}}" method="POST">
					@csrf
						<div class="row no-wrap justify-content-center">

							<input id="footer__email" class="form-control " type="email" name="email" 
							placeholder="{{ __('your email') }}">
				
							<button type="submit" class="footer__btn btn btn-primary">{{ __('send') }}</button>
						</div>
					
				</form>
			</div>
		</div>
	</div>


  <div class="container footer">
	 <div class="footer__content">
		<div class="row__footer-brand mb-3 ">
			<div class="footer-brand ml-2 d-flex">
				<a class="footer-brand" href="{{ url('/') }}">
											
					
					<img src="{{Storage::disk('public')->url('Rm/Ma/DW/oN/9XhRK00PoPeRwUWF_1638471509.png')}}" alt="" width="50px" height="50px" >
					<div class="footer__name">
						{{ __('Fish Food') }}
					</div>
				</a>
			</div>
		</div>	
		

			<div class="col-md-12 text-center">
				<div class="row">
					<div class="col-md-3 text-left">
						<ul class="list-unstyled text-small">
							<li><a class="text-muted" href="#">{{ __('About') }}</a></li>
							<li><a class="text-muted" href="#">{{ __('Contact') }}</a></li>
							<li><a class="text-muted"  class="hvr-grow-rotate"  href="tel:123-56-78"><i class="fa fa-phone fa hvr-icon"></i><span style="color:#1889d4; ">123-456-78</span>  </a></li>
						
						</ul>
					</div>

					<div class="col-md-3 text-left">
						<ul class="list-unstyled text-small">
							<li><a class="text-muted" href="#">{{ __('All goods') }}</a></li>
							<li><a class="text-muted" href="#">{{ __('All categories') }}</a></li>
							<li><a class="text-muted" href="#">{{ __('Payment and delivery') }}</a></li>
						</ul>
					</div>
			
					<div class="col-md-3 text-left">
						<ul class="list-unstyled text-small">
						<li><a class="text-muted" href="#">{{ __('Shares') }}</a></li>
						<li><a class="text-muted" href="#">{{ __('Healthy recipes') }}</a></li>
						<li><a class="text-muted" href="#">{{ __('Reviews') }}</a></li>
						</ul>
					</div>

					<div class="team col-md-3 text-center">
						<ul class="list-unstyled text-small">
							<li class="pb-1"><a class="text-muted" href="#">{{ __("Follow our news") }}</a></li>
							<hr class="mt-0">
							<li>
								<div class="row justify-content-center">
								<a href=""><i class="footer__fa fa fa-twitter"></i></a>
								<a href=""><i class="footer__fa fa fa-facebook pl-3"></i></a>
								<a href=""><i class="footer__fa fa fa-instagram pl-3"></i></a>
								</div>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>


		<hr class="socket">
		<div class="nano text-center">
			&copy;Nano 2021
		</div>

</footer>

    

