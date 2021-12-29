<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use App\Models\Manufacturer;
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
	
		$image = $product->image()->get();
		$units = Unit::all();
		$units = $product->units()->first();

		$products = Product::inRandomOrder()->take(6)->where('quantity', '>', '0')->get();
		$comments = $product->comments()->with('user')->paginate(5);
	
		return view('shop.product.show', compact('product', 'comments', 'products', 'categories', 'manufacturers', 'image', 'units' ));
	}

	public function index($locale, Product $product, Category $category, Manufacturer $manufacturer)
	{
		$products = Product::where('quantity', '>', '0')->paginate(6);
		$categories = Category::all();
	
		$manufacturers = Manufacturer::all();
			
		$parentCategories = Category::where('parent_id',0)->get();

		return view('shop.index', compact('products', 'manufacturers', 'parentCategories','categories', 'category'));
	}

	public function up($locale, Product $product){
			
		$categories = Category::all();
		$manufacturers = Manufacturer::all();
		$comments = $product->comments()->with('user');
		
		$image = $product->image()->get();
		$units = Unit::all();
		$units = $product->units()->first();
		$products = Product::orderBy('price', 'asc')->paginate(6);
		$parentCategories = Category::where('parent_id',0)->get();
		
		return view('shop.price.up', compact('products', 'comments', 'parentCategories','product', 'categories', 'manufacturers','image', 'units') );
	}

	public function priceDown($locale, Product $product){
		$categories = Category::all();
		$manufacturers = Manufacturer::all();
		$comments = $product->comments()->with('user');
		
		$image = $product->image()->get();
		$units = Unit::all();
		$units = $product->units()->first();
	
		$products = Product::orderBy('price', 'desc')->paginate(6);
		$parentCategories = Category::where('parent_id',0)->get();
		
		return view('shop.price.down' , compact('products', 
															'comments', 
															'parentCategories', 
															'product', 
															'categories', 
															'manufacturers',
															'image',
															'units')  );
	}
}