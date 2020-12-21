<form action="{{ route('search') }}" method="GET" class="search-form">
	<input type="text" name="query" id="query" value="{{  request()->input('query') }}" class="search-box"  placeholder="{{ __('search for product') }}">
		<i class="fa fa-search"></i>
		<i class="fa fa-times"></i>
</form>

