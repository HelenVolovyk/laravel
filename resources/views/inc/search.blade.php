<form action="{{ route('search') }}" method="GET" class="search-form">
	<i class="fa fa-search"></i>
	<input type="search" name="query" id="query" value="{{  request()->input('query') }}" class="search-box" placeholder="{{ __('search for product') }}">
</form>