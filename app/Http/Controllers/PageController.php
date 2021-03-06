<?php

namespace App\Http\Controllers;

use App\Models\Otherimage;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

	public function __invoke($page)
	{
		$otherimages = Otherimage::all();
		$metaTitle = __('Meta Title: ' . $page);
		if($metaTitle == 'Meta Title: ' . $page){
			$metaTitle = NULL;
		}
			
		return view('pages.' . $page, ['metaTitle' => $metaTitle], compact('otherimages'));
	}

	


// 	 private $orderRepository;

// 	public function __construct(OrderRepository $orderRepository)
// 	{
// 		$this->orderRepository = $orderRepository;
// 	}

	
// 	 public function thankyou()
// 	 {
// 		 $order = $this->orderRepository->getId();
// 		//dd($order[0]->id);
// 		 return view('shop.checkout.thankyou', compact('order'));
// 	 }
 }