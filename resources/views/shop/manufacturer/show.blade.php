@extends('layouts.app')

@section('header')
<title></title>
@endsection

@section('content')

	<div class="content">
		<div class="container__fluid">
			<div class="shop__container">
			
				@include('inc.breadcrumb')

					<h2 class="text-center mb-4">{{ __('Products by country') }} "{{ $manufacturer->__('title')}}"</h2>
			
					<div class="row">

						<div class="col-md-2">
							@include('inc.sidebar')
						</div>
					
						<div class="col-md-10">
							@include('inc.product-sort')
						</div>

				</div>

			</div>
		</div>
	</div>
@endsection