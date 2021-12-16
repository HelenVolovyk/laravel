<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Manufacturer;
use Illuminate\Http\Request;


class ShopController extends Controller
{

	public function search(Request $request)
	{
		dd($request()->input('query'));
		$categories = Category::all();
		$manufacturers = Manufacturer::all();

		$request->validate([
			'query' => 'required|min:3'
		]);

		$query = request()->input('query');
	

		$products = Product::where('name', 'like', "%$query%")
									->orWhere('description', 'like', "%$query%")
									  ->paginate(6);
									

		return view('shop.product.search-result', compact('categories', 'manufacturers'))->with('products', [app()->getLocale(), $products ] );
	}
	
}