<div class="col-sm-12 comment-block pb-2" style="padding: 5px 0 5px 5px;  margin: 4px 0;">

	 @include('comments.comment_block', $comment->user)

  <p class="ml-3">{{$comment->comment}}</p>

      @if(!is_null($comment->childes()))
        <div class="col-sm-12 childes-block ml-3">
				<div class="" style="background-color: #f1f1f1b2; ">
					@each('comments.single', $comment->childes(), 'comment')
				</div>
        </div>
		@endif
		
</div>
