@extends('layouts.app')

@section('content')
<div class="content">
<div class="container">
 
    <h2>{{ __('Payment and delivery') }}</h2>
	 <hr class="featurette-divider">

	
		<div class="container">
		  <h1 class="display-3">Hello, world!</h1>
				<div class="offset-md-3 mt-5">
					<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
				</div>
		</div>
	
	 <div class="container mt-3">
		<!-- Example row of columns -->
		<div class="row">
			<div class="about-block mt-5">
				<div class="about-block__row d-flex flex-wrap">

					<div class="about-block__element_1">
						<div class="about-block__content">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia pariatur molestiae animi nisi nostrum, libero consectetur ipsa nam, beatae similique rerum deleniti perspiciatis at a dolores facilis itaque quam corporis!
						</div>
					
					</div>

					<div class="about-block___element_2 col-md-10 mt-5" >
						<h2>Heading</h2>
						<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
						
					</div>	

				</div>
			
		  </div>
		</div>
	</div>
		
	 <hr class="featurette-divider mt-5">
</div>
	<div class="container-fluid">
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
	</div> 

	 <div class="text">
		 Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quam cupiditate, ea recusandae et veritatis soluta aliquid reiciendis! Consequatur quibusdam odio cum provident mollitia perferendis qui, ex modi reiciendis ipsum?
	 </div>


@endsection