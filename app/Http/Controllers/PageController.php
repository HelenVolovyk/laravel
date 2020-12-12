<?php

namespace App\Http\Controllers;

use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
	 public function about()
	 {
		 return view('about');
	 }
	 public function payment()
	 {
		 return view('payment');
	 }
	 public function shares()
	 {
		 return view('shares');
	 }
	 public function recipes()
	 {
		 return view('recipes');
	 }
	


	 private $orderRepository;

	public function __construct(OrderRepository $orderRepository)
	{
		$this->orderRepository = $orderRepository;
	}

	
	 public function thankyou()
	 {
		 $order = $this->orderRepository->getId();
		//dd($order[0]->id);
		 return view('shop.checkout.thankyou', compact('order'));
	 }
}