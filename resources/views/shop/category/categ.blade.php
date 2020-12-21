

<div class="col-sm-6 col-md-4">
  <div class="card shadow-sm" >


     <div class="cart-link">
       
     
                   
     </div>
   
 
    <div class="card-body">
      <a href="{{route('category.show', $category)}}">
        <h5 class="card-title">{{$category->__('title')}}</h5>
      </a>
      
		 <p class="card-text">{{$category->__('description')}}</p>
		 
		 @include('admin.categories.parts.images')
      
         

     

     
    </div>
  </div>
 </div>