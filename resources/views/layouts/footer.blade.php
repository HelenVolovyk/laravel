<footer>
	
	<div id="d" >
		<div class="jumbotron jumbotron-fluid  ibg text-center  wow fadeIn">
		<img class="ibg" src="{{Storage::disk('public')->url('w2/AC/kt/t2/u1PXIIR3M75xKc0h_1639521679.jpg')}}" alt=""  >
		{{-- <img class="ibg" src="{{Storage::disk('public')->url('Ee/Iq/Ro/0l/pWiav22HBntU3Dda_1639492859.jpg')}}" alt=""  > --}}
	
		<div class="container text-center">
		  <p class="subscrib pb-2">{{ __('we do not spam our subscribers') }}</p>
		  <p class="subscriber pb-3">{{ __('but we want them to know about everything first') }}</p>
			<div class="col md-6 ">
				<form action="{{route('contact.send')}}" method="POST">
					@csrf
						<div class="row no-wrap justify-content-center">
							<div class="">
								<input id="footer__email" class="form-control" type="email" name="email" 
								placeholder="{{ __('your email') }}">
							</div>
							<div class="">
								<button type="submit" class="footer__btn btn btn-blu">
									<span class="footer__btn-send">
										{{ __('send') }}
									</span>
								</button>
							</div>
						
						</div>
				</form>
			</div>
		</div>
	</div>
	<div class="footer__line" style="width: 100%; height:22px; background-color: #f1f1f1;"></div>
	</div>


	
	
<div class="footer__breadcrumb">
  	<div class="container-fluid">
	  	<div class="footer__content">

			<div class="row__footer-brand mb-2 mt-4">
				<div class="footer-brand ml-2 d-flex">
					<a class="footer-brand" href="{{ url('/') }}">
						<img src="{{Storage::disk('public')->url('np/Cz/3E/a0/nxqXTW3kFtpLajPK_1639516204.png')}}" alt="" width="30px" height="30px" >
						<div class="footer__name">
							{{ __('BONITO') }}
						</div>
					</a>
				</div>
			</div>	
		

			<div class="col-md-12 text-center">
				<div class="row">

					<div class="col-md-3 text-left">
						<ul class="list-unstyled text-small">
							<li><a class="text-muted" href={{route('page', [app()->getLocale(),'about'])}}>{{ __('about') }}</a></li>
							<li><a class="text-muted" href={{route('page', [app()->getLocale(),'contact'])}}>{{ __('contact') }}</a></li>
							<li><a class="text-muted"  class="hvr-grow-rotate"  href="tel:123-56-78"><i class="fa fa-phone fa hvr-icon fa-foot"></i><span style="color: var(--prima); font-weight: bold;">123-456-78</span>  </a></li>
						
						</ul>
					</div>

					<div class="col-md-3 text-left">
						<ul class="list-unstyled text-small">
							<li><a class="text-muted" href={{route('shop', [app()->getLocale()])}}>{{ __('All goods') }}</a></li>
							<li><a class="text-muted" href={{route('categories', [app()->getlocale()])}}>{{ __('All categories') }}</a></li>
							<li><a class="text-muted" href={{route('page', [app()->getLocale(), 'payment' ])}}>{{ __('payment and delivery') }}</a></li>
						</ul>
					</div>
			
					<div class="col-md-3 text-left">
						<ul class="list-unstyled text-small">
						<li><a class="text-muted" href={{route('page', [app()->getLocale(),'shares'])}}>{{ __('shares') }}</a></li>
						<li><a class="text-muted" href={{route( 'recipes', [app()->getLocale()])}}>{{ __('healthy recipes') }}</a></li>
						<li><a class="text-muted" href={{route('page', [app()->getLocale(),'reviews'])}}>{{ __('reviews') }}</a></li>
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
</div>

		<hr class="mt-0 mb-0" style="margin-bottom: 0">
		<div class="nano text-center">
			&copy;Nano 2021
		</div>

</footer>

    

