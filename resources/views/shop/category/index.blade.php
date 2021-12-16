@extends('layouts.app')

@section('title')
All Categories
@endsection

@section('content')



<div class="content">

	@include('inc.breadcrumb')
		
		<div class="container-fluid">
			<h1 class="text-center mt-2" style="color: var(--gr-b);">{{ __('All Categories') }}</h1>

			<div class="categories">
					<div class="col-md-12  mt-5">
			
						<div class="categories__container text-center">
							<div class="categ__text pt-3 pb-3">
								@foreach($parentCategories->chunk(3) as $parentChunk)
									<div class="row d-flex justify-content-around">
										@foreach($parentChunk as $parentCategory)
												@include('shop.category.categ')
										@endforeach
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>

				<div  class="offset">
					<div class="jumbotron jumbotron-fluid" style="margin-top: 20px">
						<div class="container-fluid mt-5">
							<h3 class="heading text-center" style="color: #fff">Fluid jumbotron</h3>
							<div class="heading__underline"></div>
						</div>
					</div> 
				</div>

			
		</div>
	</div>
@endsection
