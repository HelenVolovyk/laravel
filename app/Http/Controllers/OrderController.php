<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderRequest;
use App\Jobs\PostAfterCreateOrder;
use App\Jobs\PostAfterCreateOrderjob;
use App\Jobs\PostAfterCreateUser;
use App\Models\Order;
use App\Models\Product;

use App\Models\OrderStatus;
use App\Models\User;
use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{


    public function getOrderByUser(Product $product)
    {
        
        $orders = Auth::user()->orders;
	 //dd($orders);
	 
        foreach($orders as $order){
          $product = $order->products();
        }
     
		  $order->products()->first();
		  
		 
		  //dd(Cart::store(Auth::user()));
        //$product =  $order->products()->orderBy('name')->get();
		  //dd( $order->products()->first()->name);

		  //dd(Cart::instance('cart')->content());
   
        return view('user/orders', compact('orders', 'product'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateOrderRequest $request, User $user)
    {
		  
		$user = auth()->user();
        $cartTotal = (float) Cart::instance('cart')->total(2, '.', '');
        $cartItem = Cart::instance('cart')->content();

		  //dd($cartTotal);
		  //dd($cartItem);
		  //dd($request->validated());

        if($cartTotal > auth()->user()->balance){
            return redirect()->back()->with(['customeError'=>'You don`t have enough money on your balance']);
        }

        $fields = $request->validated();
        $status = OrderStatus::where('type', '=', config('order_status.in_process'))->first();

		  //dd($fields);
		  //dd($status);

        $order  = Order::create([
            'user_id'      => $user->id,
            'user_name'    => $fields['name'],
            'user_surname' => $fields['surname'],
            'user_email'   => $fields['email'],
            'user_phone'   => $fields['phone'],
            'country'      => $fields['country'],
            'city'         => $fields['city'],
            'address'      => $fields['address'],
            'total'        => $cartTotal,
            'status_id'    => $status->id

		  ]);

		  if($order){
			$job = new PostAfterCreateOrderjob($order);
			$this->dispatch($job);
		}
		  
		//$user = new User();
		$user->update([
           'balance' => $user->balance - $cartTotal 
        ]);

       foreach ($cartItem as $item) {
          $order->products()->attach($item->id, [
              'quantity'   => (int) $item->qty,
              'price'      => $item->price
          ]);
       }

		  
		  //Cart::instance('cart')->restore($user->instanceCartName());
		  Cart::instance('cart')->destroy();
         //dd($user);
        return redirect()->route('thankyou', compact('order'));
    }

   }
