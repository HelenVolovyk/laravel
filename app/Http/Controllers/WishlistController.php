<?php

namespace App\Http\Controllers;

use App\Jobs\PostAfterDeleteJob;
use App\Jobs\PostAfterDeleteWishistJob;
use App\Models\Product;
use App\Models\User;
use App\Models\WishList;
use App\Services\WishlistService;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{


	public function userList()
	{
		return view('user.wishlist.wishlist');
	}


	public function add(Product $product, User $user, WishlistService $service)
	{
		//dd($product);
		$service->addItem($product);
		

		return redirect()->back()->with(['status' => 'The product was added to your wish list!']);
	}

	
	public function delete(Request $request, Product $product, WishlistService $service)
	{
		//dd($product);
		$service->deleteItem($request->rowId, $product);

		$user = new User();
		Cart::instance('wishlist')->restore($user->instanceCartName());

		$result = Cart::instance('wishlist')->remove($request->rowId);

		if ($result) {
			$job = new PostAfterDeleteWishistJob(Cart::instance('wishlist'));
			$this->dispatch($job);
			//dispatch_now(new PostAfterDeleteWishistJob($request->rowId));

		}

		
		return redirect()->back()->with(['status' => 'The product (' . $product->name . ') was deleted from your wish list!']);
	}
}
