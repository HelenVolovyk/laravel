 @extends('layouts.app')
 @inject('wishlist', 'App\Services\WishlistService')

@section('content')
<div class="container">
{{-- 
	{{$product=Product::where('images_id', $image->id)->get()}}  --}}
	{{-- {{ Storage::disk('public')->$filePath}} --}}
	{{Storage::disk('public')->url($product->images()->pluck('path'))}} 
	
<div class="row justify-content-end">
  <div class="col-md-4">
	 <h3 class="text-center">{{ $product->__('name') }}</h3>
	
	
  </div>
  <div class="content">
  <div class="col-md-4">
    <div class="text-center"> 
 

      <div class="like">
      <a class="nav-link" href="{{route('wishlist.add', $product)}}"><i class="fa fa-heart-o fa-2x" aria-hidden="true"></i></a></div>
    </div>
   
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-6">
      @if(Storage::disk('public')->has($product->thumbnail))
        <img src="{{Storage::disk('public')->url($product->thumbnail)}}" class="card-img-top" alt="">
      @endif
     
      
        
  </div>
  <div class="col-md-6">
    @if($product->discount > 0)
		<p style="color: red; text-decoration: line-through">{{ __('Old Price:') }}
			 ${{$product->price}}</p>
    @endif
      <p>{{ __('PRICE:') }}<strong>${{$product->printPrice()}}</strong></p>
      <p>SKU: {{$product->SKU}}</p>
      <p>{{ __('IN STOCK:') }}
			<strong> {{$product->quantity}}</strong></p>
      <hr>
       
        <div class="product_category">
			 <div>{{ __('Product Categories') }}</div>
          <div>@include('shop.category-view', ['category'=>$product->category()->first()])</div>
        </div>
        <hr>
           @if($product->usersRated() > 0)
           <p>{{ __('Rating:')  }}
				  {{round($product->averageRating(), 1) ?? 0}} /5 ({{$product->usersRated()}})</p>
           @endif
        
    
      @if($product->quantity > 0)
      <hr>
      <div class="">
        <p>{{ __('Quantity') }}</p>
       
      <form action="{{route('cart.add', $product)}}" method="POST" class="form-inline" >
        @csrf
        @method('post')
        <div class="form-froup  mb-2">
          <input type="hidden" name="price_with_discount" value="">
          <label for="product_count" class="sr-only">Count</label>
           <input type="number"
                  name="product_count"
                  class="form-content"
                  id="product_count"
                  min="1"
                  max="{{$product->quantity}}"
                  value="1"
                  style="width: 55px; height: 35px; margin-right:10px"> 

        </div> 
        <button type="submit" class="btn btn-primary mb-2">{{ __('Add to Cart') }}</button>
		</form>
		
	    </div>
  @endif
  <hr>
  {{-- <p>
	<a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
		<i class="fa fa-check"></i>
	  {{ __('ordering options') }}
	</a>
 </p>
 <div class="collapse" id="collapseExample">
	<div class="card card-body">
	  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>
 </div>
  <p>
	<a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
		<i class="fa fa-check"></i>
	  {{ __('payment options') }}
	</a>
 </p>
 <div class="collapse" id="collapseExample">
	<div class="card card-body">
	  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>
 </div>
  <p>
	<a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
		<i class="fa fa-check"></i>
	  {{ __('delivery') }}
	</a>
 </p>
 <div class="collapse" id="collapseExample">
	<div class="card card-body">
	  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
	</div>
 </div> --}}


 <div class="accordion" id="accordionExample">
	<div class="card">
	  <div class="card-header" id="headingOne">
		 <h5 class="mb-0">
			<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				<i class="fa fa-check"></i>
				{{ __('ordering options') }}
			</button>
		 </h5>
	  </div>
 
	  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
		 <div class="card-body">
			Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla 
		 </div>
	  </div>
	</div>
	<div class="card">
	  <div class="card-header" id="headingTwo">
		 <h5 class="mb-0">
			<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				<i class="fa fa-check"></i>
				{{ __('payment options') }}
			</button>
		 </h5>
	  </div>
	  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
		 <div class="card-body">
			Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla 
		 </div>
	  </div>
	</div>

 </div>
 
 @auth   
<form class="form-horizontal poststars" action="{{route('rating.add', $product)}}" id="addStar" method="POST">
  @csrf
  
<div class="form-group required">
  <div class="col-sm-12">

    @if($product->getUserProductRating()!==false) 
    @for($i=1; $i<=5; $i++)
      <input class ="star star-{{$i}}"
              value="{{$i}}"
              id="star-{{$i}}"
              type="radio"
              name="star"
             @if($i == $product->getUserProductRating()) checked ="checked" @endif
              />
              <label class="star star-{{$i}}" for="star-{{$i}}"></label>
            @endfor
     @else   
        <input class="star star-1" value="1" id="star-1" type="radio" name="star">
        <label class="star star-1" for="star-1"></label> 
        <input class="star star-2" value="2" id="star-2" type="radio" name="star">
        <label class="star star-2" for="star-2"></label> 
        <input class="star star-3" value="3" id="star-3" type="radio" name="star">
        <label class="star star-3" for="star-3"></label> 
        <input class="star star-4" value="4" id="star-4" type="radio" name="star">
        <label class="star star-4" for="star-4"></label> 
        <input class="star star-5" value="5" id="star-5" type="radio" name="star">
        <label class="star star-5" for="star-5"></label> 
       
     @endif 
        </div>
      </div>
    </form>
  @endauth  
  
  </div>

  <div class="">
      <p style="margin-top: 2%">{{ __('DESCRIPTION:') }} </p>
      <p>{{$product->__('description')}}</p>
     
  </div>
  
<div class="">
     @include('comments.index', ['comments'=>$comments, 'product'=>$product]) 
  
  
</div>
  

</div>
    <script>
      $(function(){
        $('#addStar').change('.star', function(e){
          $(this).submit();
        });
      });
    </script>
</div>    


@endsection
</div>



