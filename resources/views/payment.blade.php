@extends('layouts.app')
@section('title', 'payment')

@section('content')
<div class="content">
	<div class="container mt-5">
 
		<h2>{{ __('Payment and delivery') }}</h2>
		<hr class="featurette-divider">
		<div class="d-flex justify-content-between">
			<div class="bread">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a class="breadcrumb__link" href="/">{{ __('Home') }}</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{ __('payment') }}</li> 
					
				</ol>
			</div>
			{{-- <div class="">
				@include('inc.search')
			</div> --}}
		</div>
		<div class="row">
			<div class="payment">
				<div class="payment__content">
					<div class=" mt-5">
						<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
						<p class="">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
						<p class="">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
					</div>
				</div>	
				<div class="payment__photo">
					<div class=" mt-3 mb-3">
					<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
					</div>
				</div>
			</div>
		 </div>
	</div>

	<div class="container-fluid mt-5 mb-5">
		<div class="payment__box col-md-4 offset-md-2 col-sm-12 offset-sm-0">
				<div class="payment__box-square"></div>
		</div>
	
			<div class="payment__block">
				<span>Donec sed odio dui. Cras justo odio, dapibus ac </span>
			</div>	
	</div>	
	
	
	<div class="container pt-5">
		<!-- Example row of columns -->
		<div class="row  ">
		  <div class="col-md-6 ">
			  <div class="payment__title">
				<i class="fa fa-money fa-2 pr-2 pt-2" aria-hidden="true"></i> 
			 	<h2>Heading</h2>
			</div>
		
			<p style="padding: 0 5%">
			 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
		</p>
			 {{-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> --}}
			
		  </div>
		  <div class="col-md-6">
			<div class="payment__title">
			<i class="fa fa-credit-card pr-2 pt-2" aria-hidden="true"></i>
			 <h2>Heading</h2>
			</div>
		
			 <p style="padding: 0 5%">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
			Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			 {{-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> --}}
		
		  </div>
		
		</div>
  
		<hr>
  
	 </div> 
	

	{{-- <div class="container-fluid" style="background-color: rgb(235, 235, 235)">
		
		<div class="tabs">
			
			<nav class="tabs__items">
				<a href="#tab_01" class="tabs__item"><span>
					<i class="fa fa-money pr-1" aria-hidden="true"></i> 
					Первая</span></a>
				<a href="#tab_02" class="tabs__item"><span>
					<i class="fa fa-credit-card pr-1" aria-hidden="true"></i>
					Вторая</span></a>
				<a href="#tab_03" class="tabs__item"><span>
					<i class="fa fa-cc-visa pr-1" aria-hidden="true"></i>
					Третья</span></a>
			</nav>
			<div class="tabs__body">
				<div id="tab_01" class="tabs__block">
					<p>
					Первая.  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quis perferendis neque veritatis nesciunt impedit doloribus esse. Quis nisi ut, inventore velit ipsa necessitatibus soluta suscipit harum doloribus, rerum dolore?
					Первая.  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quis perferendis neque veritatis nesciunt impedit doloribus esse. Quis nisi ut, inventore velit ipsa necessitatibus soluta suscipit harum doloribus, rerum dolore?
					</p>
				</div>
			
				<div id="tab_02" class="tabs__block">
					<p>
					Вторая.  Перваяраяorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quis perferendis neque veritatis nesciunt impedit doloribus esse. Quis nisi ut, inventore velit ipsa necessitatibus soluta suscipit harum doloribus, rerum dolore?
					Вторая.  Перваяраяorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quis perferendis neque veritatis nesciunt impedit doloribus esse. Quis nisi ut, inventore velit ipsa necessitatibus soluta suscipit harum doloribus, rerum dolore?
					</p>
				</div>
			
				<div id="tab_03" class="tabs__block">
					<p>
					Третья.  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quis perferendis neque veritatis nesciunt impedit doloribus esse. Quis nisi ut, inventore velit ipsa necessitatibus soluta suscipit harum doloribus, rerum dolore? 
					Третья.  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quis perferendis neque veritatis nesciunt impedit doloribus esse. Quis nisi ut, inventore velit ipsa necessitatibus soluta suscipit harum doloribus, rerum dolore? 
					</p>
				</div>
			</div>
		</div>
		 --}}
	 </div>  

	 <div class="text text-center">
			 <p></p>
	 </div>
</div>

@endsection