<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Unit;

class ProductController extends Controller
{


	/**
	 * Display the specified resource.
	 *
	 * @param  Product $product
	 * @return \Illuminate\Http\Response
	 */
	public function show(Product $product, Image $image, $locale)
	{
		$categories = Category::all();
		$comments = $product->comments()->with('user')->paginate(5);
		
		$image = $product->image()->get();
		$units = Unit::all();
		$units = $product->units()->first();

		
		$products = Product::inRandomOrder()->take(3)->where('quantity', '>', '0')->get();
		$categories = Category::all();
	
		$locale = app()->getLocale();
		//dd($locale);
		return view('shop.product.show', compact('product',  'comments'), compact('products', 'categories'), compact('image'), compact('units', 'locale') );
	}
}