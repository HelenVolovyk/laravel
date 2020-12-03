@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           

<h2 class="text-center mb-4">{{ __('My Orders') }}</h2>
 
@foreach($orders as $order)


<table class="table">
    <thead>
      <tr>
        <th>Order_id</th>
        <th>Total </th>
        <th>Status</th>
        <th>My requisites</th>
        <th>My products</th>
      </tr>
      <tr>
        <td>N{{$order['id']}}</td>
        <td> {{$order['total']}} </td>
        <td> {{$order['status']['type']}}</td>
        <td><div>
                      
                <div>{{$order['user_name']}}</div>
                <div>{{$order['user_surname']}}</div>
                <div>{{$order['user_email']}}</div>
                <div>{{$order['user_phone']}}</div>
                <div>{{$order['country']}}</div>
                <div>{{$order['city']}}</div>
                <div>{{$order['address']}}</div>
              
            </div>
         </td>

        <td>
             <div>
             
									
					

					
					{{-- {{ $order->products()->firstOrFail()->__('name') }} --}}

					 <?php
					// dd( $order->products()->firstOrFail()->__('name') )

// 					$order  = Order::find(1);
// $product = $order->product;
// $name = $product->name;
// dd($name);

					?> 
{{-- 					
				{{ $order->products()->first() }}
				 --}}
		

					 @each('shop.cart.parts.checkout_view', Cart::instance('cart')->content(), 'row')
               
            
            </div>
         </td>
      </tr>
    </thead>

  </table>

@endforeach
        </div>
    </div>
</div>

@endsection