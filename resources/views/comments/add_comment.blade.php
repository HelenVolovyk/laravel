<form action="{{route('comments.add', [app()->getLocale(), $product])}}" method="POST" id="new_comment" style="margin: 16px auto; border: 1px solid #333; padding: 16px; ">
  @csrf

  <h6>New comment</h6>
		<input type="hidden" name="parent_id" id="parent_id" >
		<hr>
		<textarea name="comment" id="comment" class="form-control" rows="10"></textarea>
		<button type="submit" class="btn btn-outline-primary form-control mt-3">Add comment</button>
</form>

