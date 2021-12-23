@extends('layouts.app')

@section('header')
<title></title>
@endsection

@section('content')
@include('inc.message')

	<div class="content">
		<div class="container__fluid">
			<div class="shop__container">

				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">{{ __('Home') }}</a></li>
					<li class="breadcrumb-item"><a href="/">{{ __('Shop') }}</a></li>
					<li class="breadcrumb-item active">{{ __('Search') }}</li>
				</ol>

					<div class="result  text-center ">
						<h3 class="search-results-count">{{ $count }} 
							{{ __('result(s) for') }} 
							<span class="query__result"> &nbsp '{{  request()->input('query') }}'</span>
						</h3>
					</div>
		
					<div class="row shop">
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