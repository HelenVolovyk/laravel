<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
	 public function about()
	 {
		 return view('about');
	 }

	 public function thankyou($order)
	 {
		$order = Auth::user()->order;
		return view('shop.checkout.thankyou', compact('order'));
	 }
}
