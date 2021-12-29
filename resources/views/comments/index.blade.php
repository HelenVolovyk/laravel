<div class="col-md-12">

    <div class="col-cm-12">
      @each('comments.single', $comments, 'comment')
      <br>
      {{$comments->links()}}
	 </div>
	
</div>

