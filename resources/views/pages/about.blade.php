@extends('layouts.app')

@section('header')
<title>{{ $metaTitle }}</title>
@endsection


@section('content')
<div class="">
	
	@include('inc.breadcrumb')

		<h2 style="color: var(--title);">{{ __('ABOUT') }}</h2>
			<div class="container ">
				<div class="col-md-12  pt-4 pb-5">
					<h4 class="font-italic text-left" style="color: var(--gr);">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, at fuga! Quis molestiae necessitatibus minima recusandae sequi facilis repudiandae nemo commodi eum, culpa est veniam odio quia, cum quam possimus.</h4>
			</div>
		</div>

		<div class="about-block mb-4">
			<div class="about-block__row d-flex flex-wrap">

					<div class="about-block__element_1 ibg">
						<img class="ibg" src="{{Storage::disk('public')->url($otherimages->find(3)->img_src)}}" alt="">
						<div class="about-block__content">
						
						</div>
					</div>

					<div class="about-block__element_2">
						<div class="about-block__content_2">
							<div class="about-block__content_2-text wow fadeIn" data-wow-duration="2.5s">
								<p style="color: white">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia pariatur molestiae animi nisi nostrum, libero consectetur ipsa nam,
								</p>
							</div>
						</div>
					</div>	

			</div>
		</div>

		<div class="container-fluid">
			<div class="about__text">
					
				<p class="text-left mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ratione fugiat distinctio accusamus similique, nesciunt quisquam dicta harum aliquam quo sint incidunt ut aperiam laborum sit, neque molestiae voluptatum deserunt? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ratione fugiat distinctio accusamus similique, nesciunt quisquam dicta harum aliquam quo sint incidunt ut aperiam laborum sit, neque molestiae voluptatum deserunt?</p>
				<p class="text-right pt-5" style="color: var(--prima);">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
					
			</div>
		</div>

 </div>
@endsection