@extends('layouts.admin')

@section('content')

<div class="content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
			<h3 class="">Uploaded images</h3>
				<div class="upload__gallery d-flex" >
						@foreach ( $otherimages as  $otherimage)
						<a href="{{ route('admin.images.show', $otherimage) }}">
							<div class="img__uploaded" style="padding: 1%">
								<img src="{{ Storage::disk('public')->url($otherimage->img_src) }}" alt="{{ 	 $otherimage->img_alt}}" width="150px" height="150px">
								{{-- <button class="btn btn-danger "
								data-route="{{route('admin.images.destroy', $otherimage->id )}}">Remove</button>  --}}
							</div>
						</a>
						@endforeach
				</div>
		  </div>
	 </div>
</div>
</div>
@endsection