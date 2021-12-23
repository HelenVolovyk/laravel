<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Manufacturer;
use Illuminate\Http\Request;


class ShopController extends Controller
{

	public function search($locale, Request $request)
	{
		$categories = Category::all();
		$parentCategories = Category::where('parent_id',0)->get();
		$manufacturers = Manufacturer::all();

		$request->validate([
			'query' => 'required|min:3'
		]);

		$query = request()->input('query');
	
		$products = Product::where('name', 'like', "%$query%")
									->orWhere('description', 'like', "%$query%")
									->paginate(6);
							
		 $count = $products->count();
		
		return view('shop.product.search-result', compact('parentCategories',   'products', 'manufacturers', 'count'))->with('categories', $categories);
	}
	
}