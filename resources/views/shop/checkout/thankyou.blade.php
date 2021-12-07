@extends('layouts.app')

@section('content')
<div class="content cent">
<div class="">
<h1 class="text-center">{{ __('Thank you') }}, 	{{auth()->user()->name}}.</h1>
<br>
<h2 class="text-center">{{ __('The order') }} N {{ $order['id'] }} {{ __('was successfully created') }}!</h2>
</div>
</div>
@endsection
