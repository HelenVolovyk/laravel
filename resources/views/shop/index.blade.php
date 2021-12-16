@extends('layouts.app')

@section('header')
	<title>{{ __('Shop') }}</title>
@endsection

@section('content')

	<div class="content">
		<div class="container__fluid">
			<div class="shop__container">

				<div class="top row" style="margin: 0" >
					<div class="bread col-auto mr-auto" >
						<ol class="breadcrumb" >
							<li class="breadcrumb-item"><a class="breadcrumb__link" href="/">{{ __('Home') }}</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ __('Shop') }}</li>
						</ol>
					</div> 	
				</div>


				<div class="row">
					<div class="col-md-3">
							@include('inc.sidebar')
					</div>
		
					<div class="col-sm-12 col-md-9">
						<div class="f">
							@include('inc.product-sort')
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection
	