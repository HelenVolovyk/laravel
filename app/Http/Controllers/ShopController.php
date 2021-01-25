<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class ShopController extends Controller
{
	public function index()
	{
		$products = Product::all()->where('quantity', '>', '0');
		$categories = Category::all();
		$title = 'shop';

		return view('shop.index', compact('categories'), compact('products'),  compact('title'));
	}

	public function search(Request $request)
	{
		$categories = Category::all();

		$request->validate([
			'query' => 'required|min:3'
		]);

		$query = request()->input('query');

		$products = Product::where('name', 'like', "%$query%")
									->orWhere('description', 'like', "%$query%")
									 ->paginate(3)	;
									// ->get();

		return view('shop.product.search-result', compact('categories'))->with('products', $products);
	}
}