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
	public function show($locale, Product $product, Image $image)
	{
		$categories = Category::all();
		$comments = $product->comments()->with('user')->paginate(5);
		
		$image = $product->image()->get();
		$units = Unit::all();
		$units = $product->units()->first();

		
		$products = Product::inRandomOrder()->take(3)->where('quantity', '>', '0')->get();
		$categories = Category::all();
	
		
	//dd($locale);
		return view('shop.product.show', compact('product', 'comments'), compact('products', 'categories'), compact('image'), compact('units') );
	}

	public function index($locale, Product $products)
	{
		$products = Product::all()->where('quantity', '>', '0');
		$categories = Category::all();
	
		
//dd($products);
		return view('shop.index', compact('categories'), compact('products'));
	}
}