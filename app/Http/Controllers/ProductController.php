<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Manufacturer;
use App\Models\Otherimage;
use App\Models\Overcategory;
use App\Models\Unit;

class ProductController extends Controller
{

	public $parentCategories;
	/**
	 * Display the specified resource.
	 *
	 * @param  Product $product
	 * @return \Illuminate\Http\Response
	 */
	public function show($locale, Product $product, Image $image)
	{
		$categories = Category::all();
		$manufacturers = Manufacturer::all();
	
		$comments = $product->comments()->with('user')->paginate(5);
		
		$image = $product->image()->get();
		$units = Unit::all();
		$units = $product->units()->first();

		
		$products = Product::inRandomOrder()->take(3)->where('quantity', '>', '0')->get();
	
		//$categories = Category::all();
	
	
		
	//dd($locale);
		return view('shop.product.show', compact('product', 'comments'), compact('products', 'categories', 'manufacturers'), compact('image'), compact('units') );
	}

	public function index($locale, Product $product, Category $category, Manufacturer $manufacturer)
	{
		
		$products = Product::where('quantity', '>', '0')->paginate(6);
		$categories = Category::all();
	
		$manufacturers = Manufacturer::all();
		
		$parentCategories = Category::where('parent_id',0)->get();

	//	dd($parentCategories);
		
		
	//dd($products);
		// return view('shop.index', compact('categories', 'category'), 
		// 			compact('products', 'product'), 
		// 			compact('manufacturers', 'manufacturer'),
		// 			compact('parentCategories'));
		return view('shop.index', compact('products', 'manufacturers', 'parentCategories','categories', 'category'));
}
}