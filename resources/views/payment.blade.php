@extends('layouts.app')

@section('content')
<div class="content">
<div class="container">
 
    <h2>{{ __('Payment and delivery') }}</h2>
	 <hr class="featurette-divider">

	 <div class="jumbotron mt-5">
		<div class="container">
		  <h1 class="display-3">Hello, world!</h1>
		  <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
		  {{-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> --}}
		</div>
	 </div>
  
	 <div class="container mt-5">
		<!-- Example row of columns -->
		<div class="row">
		  <div class="col-md-4">
			 <h2>Heading</h2>
			 <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			 <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
		  </div>
		  <div class="col-md-4">
			 <h2>Heading</h2>
			 <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			 <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
		  </div>
		  <div class="col-md-4">
			 <h2>Heading</h2>
			 <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			 <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
		  </div>
		</div>
  
		
	 <hr class="featurette-divider mt-5">
	 
	 <div class="tabs">
		 <nav class="tabs__items">
			 <a href="#tab_01" class="tabs__item"><span>Первая</span></a>
			 <a href="#tab_02" class="tabs__item"><span>Вторая</span></a>
			 <a href="#tab_03" class="tabs__item"><span>Третья</span></a>
		 </nav>
		 <div class="tabs__body">
			 <div id="tab_01" class="tabs__block">
				Первая.  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quis perferendis neque veritatis nesciunt impedit doloribus esse. Quis nisi ut, inventore velit ipsa necessitatibus soluta suscipit harum doloribus, rerum dolore?
			 </div>
		 
			 <div id="tab_02" class="tabs__block">
				Вторая.  LоПерваяраяorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quis perferendis neque veritatis nesciunt impedit doloribus esse. Quis nisi ut, inventore velit ipsa necessitatibus soluta suscipit harum doloribus, rerum dolore?
			 </div>
		
			 <div id="tab_03" class="tabs__block">
				Третья.  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quis perferendis neque veritatis nesciunt impedit doloribus esse. Quis nisi ut, inventore velit ipsa necessitatibus soluta suscipit harum doloribus, rerum dolore? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quis perferendis neque veritatis nesciunt impedit doloribus esse. Quis nisi ut, inventore velit ipsa necessitatibus soluta suscipit harum doloribus, rerum dolore?
			 </div>
			</div>
	 </div>

	 <div class="text">
		 Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quam cupiditate, ea recusandae et veritatis soluta aliquid reiciendis! Consequatur quibusdam odio cum provident mollitia perferendis qui, ex modi reiciendis ipsum?
	 </div>
</div>
</div>
@endsection