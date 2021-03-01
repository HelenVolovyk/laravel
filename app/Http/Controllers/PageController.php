<?php

namespace App\Http\Controllers;

use App\Models\Otherimage;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
	 public function about()
	 {
		 $title = 'About';
		 return view('about', compact('title'));
	 }
	 public function payment()
	 {
		 $title = 'payment';
		 return view('payment', compact('title'));
	 }
	 public function shares()
	 {
		 $title = 'shares';
		 return view('shares', compact('title'));
	 }
	 public function recipes()
	 {
		 $title = 'recipes';
		 return view('recipes', compact('title'));
	 }
	
	 public function recipe()
	 {
		 $title = '';
		 return view('recipe');
	 }
	
	 public function contact()
	 {
		 $otherimages = Otherimage::all();
		 $title = 'contact';
		 return view('contact', compact('title', 'otherimages'));
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