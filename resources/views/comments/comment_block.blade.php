<p class="iser-info">
	<strong class="user_name pl-3">{{$comment->user->name}}</strong> - 
	<small>{{$comment->created_at}}</small>
	&nbsp; | &nbsp;
	
	<a href="#" data-parent_id="{{$comment->id}}" class="reply">{{ __('Reply') }}</a>

 </p>