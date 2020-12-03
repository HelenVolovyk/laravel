<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Comment;

class ProductController extends Controller
{


	/**
	 * Display the specified resource.
	 *
	 * @param  Product $product
	 * @return \Illuminate\Http\Response
	 */
	public function show(Product $product)
	{
		$categories = Category::all();
		$comments = $product->comments()->with('user')->paginate(5);
		return view('shop.product.show', compact('product',  'comments'), compact('categories'));
	}
}
