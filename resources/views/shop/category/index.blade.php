@extends('layouts.app')

@section('title')
All Categories
@endsection

@section('content')






<div class="container">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">{{ __('Home') }}</a></li>
    <li class="breadcrumb-item"><a href="/shop">{{ __('Shop') }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ __('All Categories') }}</li>
  </ol>

  <h1 class="text-center mt-2">{{ __('All Categories') }}</h1>
<div class="col-md-12 mt-5">
  
  <div class="categories text-center">
    @foreach($categories->chunk(3) as $categoryChunk)
<div class="row d-flex justify-content-around mt-5">
  @foreach($categoryChunk as $category)

@include('shop.category.categ')

@endforeach
</div>
@endforeach
  </div>
</div>
</div>
@endsection
