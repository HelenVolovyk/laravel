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
	public function show(Product $product, Image $image)
	{
		$categories = Category::all();
		$comments = $product->comments()->with('user')->paginate(5);
		
		$images = $product->images()->get();
		$units = Unit::all();
		$units = $product->units()->first();

		
		$products = Product::inRandomOrder()->take(3)->where('quantity', '>', '0')->get();
		$categories = Category::all();
	
		
		//  $images = $product->image();
		// $images  = $product->images()->pluck('path');
		// $re =  '/[“”]/u';
		//$images  = preg_replace("/[^a-zA-Z0-9\s-]/", "", $images );
	
		//$images  = preg_replace('/(^[\"\']|[\"\']$)/', '', $image);
		
	//dd($images);
	
	//echo trim($images, '"');
		//dd($product->images()->pluck('path'));
		
		return view('shop.product.show', compact('product',  'comments'), compact('products', 'categories'), compact('images'), compact('units') );
	}
}