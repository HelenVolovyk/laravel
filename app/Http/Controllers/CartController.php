<?php

namespace App\Http\Controllers;


use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\Product;
use App\Models\User;
use App\Providers\ShoppingCartServisProvider;

use COM;

use Gloudemans\Shoppingcart\Facades\Cart;
use Gloudemans\Shoppingcart\ShoppingcartServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

	public function index()
	{
		return view('shop.cart.index');
	}

	/**
	 * @param Request $request
	 * @param Product $product
	 */

	public function add(Request $request, Product $product)
	{
			
			Cart::instance('cart')->add(
			$product->id,
			$product->__('name'),
			$request->product_count,
			$product->getPrice()
		);

		//Cart::instance('cart')->store(auth()->user()->instanceCartName()); 

		return redirect()->back()->with(['status' => 'The product was added to cart']);
	}


	public function update(Request $request, Product $product)
	{
		if ($request->product_count > $product->quantity) {
			return redirect()->back()->with(['customeError' => 'Product count should be less then' . $product->quantity]);
		}

		Cart::instance('cart')->update(
			$request->rowId,
			$request->product_count
		);

		return redirect()->back()->with(['status' => 'The product ' . $product->__('name') . ' count was updated']);
	}



	public function delete(Request $request, Product $product)
	{
		
		Cart::instance('cart')->remove($request->rowId);
		//Cart::instance('cart')->restore(Auth::user()->instanceCartName());

		return redirect()->back()
			->with(['status' => 'The product was removed']);
	}
}