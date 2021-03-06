<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Image;

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
		
		$images = $product->images()->get('path');
	
		
		//  $images = $product->image();
		// $images  = $product->images()->pluck('path');
		// $re =  '/[“”]/u';
		//$images  = preg_replace("/[^a-zA-Z0-9\s-]/", "", $images );
	
		//$images  = preg_replace('/(^[\"\']|[\"\']$)/', '', $image);
	//dd($images);
	//echo trim($images, '"');
		//dd($product->images()->pluck('path'));
		return view('shop.product.show', compact('product',  'comments'), compact('categories'), compact('images') );
	}
}