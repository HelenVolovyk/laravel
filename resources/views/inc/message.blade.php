@if($errors->any())
	<div class="alert alert-danger text-center">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif


@if(session('status'))

	<div class="alert alert-success text-center">
		{{session('status')}}
	</div>

@endif



@if(session('customeError'))
	<div class="alert alert-warning text-center">
		{{session('customeError')}}
	</div>
@endif

