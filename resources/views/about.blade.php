@extends('layouts.app')

@section('content')
<div class="content about">
	<div class="container ">
			<h2>{{ __('ABOUT') }}</h2>
			<hr class="about__hr">

			<div class="d-flex justify-content-between">
				<div class="bread">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a class="breadcrumb__link" href="/">{{ __('Home') }}</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{ __('About') }}</li> 
						
					</ol>
				</div>
				{{-- <div class="">
					@include('inc.search')
				</div> --}}
			</div>

				<div class="col-md-12 offset-md-1 pt-5 pb-5">
					<h4 class="font-italic text-left ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, at fuga! Quis molestiae necessitatibus minima recusandae sequi facilis repudiandae nemo commodi eum, culpa est veniam odio quia, cum quam possimus.</h4>
				</div>
		</div>

			<div class="about-block mb-4">
				<div class="about-block__row d-flex flex-wrap">

					<div class="about-block__element_1">
						<div class="about-block__content">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia pariatur molestiae animi nisi nostrum, libero consectetur ipsa nam, beatae similique rerum deleniti perspiciatis at a dolores facilis itaque quam corporis!
							</p>
						</div>
					</div>

					<div class="about-block__element_2">
						<div class="about-block__content_2"></div>
					</div>	

				</div>
			</div>

			<div class="container-fluid">
				<div class="about__text">
					
						
							<p class="text-left mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ratione fugiat distinctio accusamus similique, nesciunt quisquam dicta harum aliquam quo sint incidunt ut aperiam laborum sit, neque molestiae voluptatum deserunt? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ratione fugiat distinctio accusamus similique, nesciunt quisquam dicta harum aliquam quo sint incidunt ut aperiam laborum sit, neque molestiae voluptatum deserunt?</p>
							<p class="text-right pt-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
					
			
				</div>
			</div>

 </div>
@endsection