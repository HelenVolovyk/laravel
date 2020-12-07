@extends('layouts.admin')

@section('content')
 {{-- {{Storage::disk('public')->url($image['path'])}}  --}}
 {{-- {{ asset('storage/j7/B8/ca/oP/yVSE65Rl3CALJIUt_1593845599.jpg')}} --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
           
            <div class="card">
                <div class="card-header">Update Category</div>

                <div class="card-body">

                    @if($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif


                  <form method="POST" action="{{ route('admin.categories.update', $category) }}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")

                      <div class="form-group row">
                          <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
									<div class="col-md-6">
											<input id="title" 
											type="text" 
											class="form-control @error('title') is-invalid @enderror" 
											name="title" 
											value="{{$category->title ?? ''}}" 
											required 
											autofocus>
											@error('title')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
									</div>
                      </div>

                      <div class="form-group row">
                          <label for="title_uk" class="col-md-4 col-form-label text-md-right">{{ __('Title_uk') }}</label>
									<div class="col-md-6">
											<input id="title_uk" 
											type="text" 
											class="form-control @error('title') is-invalid @enderror" 
											name="title_uk" 
											value="{{$category->title_uk ?? ''}}" 
											required 
											autofocus>
											@error('title_uk')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
									</div>
                      </div>


                      <div class="form-group row" style="display: flex; flex-direction: column; align-items: center; justify-content: center">
                          @if(!empty($image))
                                <img src="{{Storage::disk('public')->url($image['path'])}}" height="250" width="250"/>
                          @endif
                          
                        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
									<div class="col-md-6">
										<input id="image" 
										type="file" 
										class="form-control @error('image') is-invalid @enderror" 
										name="image" 
										value="{{ old('image') }}">
									</div>
                     </div>

                      <div class="form-group row">
                          <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
									<div class="col-md-6">
										<textarea name="description" 
										id="description" 
										class="form-control" 
										cols="30" rows="10"
										required>
										{{$category->description ?? ''}}</textarea>
											@error('description')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
									</div>
                      </div>


                      <div class="form-group row">
                          <label for="description_uk" class="col-md-4 col-form-label text-md-right">{{ __('Description_uk') }}</label>
									<div class="col-md-6">
										<textarea name="description_uk" 
										id="description_uk" 
										class="form-control" 
										cols="30" rows="10"
										required>
										{{$category->description_uk ?? ''}}</textarea>
											@error('description_uk')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
									</div>
                      </div>

                      	<div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Update') }}
                           </button>                     
                          </div>
                      </div>
                  </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection