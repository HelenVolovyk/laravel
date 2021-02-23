@extends('layouts.admin')

@section('content')

<div class="content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
				<form method="POST" enctype="multipart/form-data" action="{{ route('admin.images.upload') }}">
					@csrf
						<table class="table table-border">
							<tr>
								<th>Alt text</th>
								<td><input type="text" name="img_alt" class="form-controll"></td>
							</tr>
							<tr>
								<th>Image</th>
								<td><input type="file" name="img_src" ></td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="submit" class="btn btn-success save-data">

								</td>
							</tr>
						</table>
				</form>
		  </div>
	 </div>
</div>
</div>
@endsection