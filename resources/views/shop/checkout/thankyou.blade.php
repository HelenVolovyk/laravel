@extends('layouts.app')

@section('content')
<h1 class="text-center">{{ __('Thank you') }}, 	{{auth()->user()->name}}.</h1>
<h2 class="text-center">{{ __('The order') }} N {{ $order[0]->id }} {{ __('was successfully created') }}!</h2>

@endsection
