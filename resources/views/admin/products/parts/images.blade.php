 <div class="container">
 <div class="form-group row "> 
   <div class="col-12 product-images-wrapper" style="padding: 5px; border: 1px solid #eee;">
   
      @if(!empty($product->images))
        @foreach($product->images as $image)
     
        <br>
          <div class="row product-images-row" style="width: 100%; margin: 0 auto;"> 
           
              <div class="col-8">
                   <img src="{{Storage::disk('public')->url($image->path)}}" height="250" width="250"/> 
                  <input type="file" name="product_images[]"/>
              </div>
          
              <div class="col-4">
      
              <button class="btn btn-danger product-images-remove ajax"
                  data-route="{{route('ajax.image.remove', $image->id)}}">Remove</button> 
             </div> 
        </div> 

         

        @endforeach
        @endif 

    </div>
      <div class="col-12">
          <button class="btn btn-outline-primary product-images-add float-right mt-2">Add Image</button>
      </div>
    </div>
  </div>
@push('footer-scripts')
  <script type="text/javascript" src="{{URL::asset('js/admin/product-images.js')}}"></script>
@endpush



{{-- <div class="row product-images-row"
        style="width: 50%; margin: 32px auto 0;">
        <div class="col-8">
            <input type="file" name="product_images[]" />
        </div>
        <div class="col-4">
            <button type="btn btn-danger product-images-remove">Remove</button>
        </div>
    </div> --}}