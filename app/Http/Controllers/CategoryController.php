<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index($locale, Category $categories)
    {
        $categories = Category::all();
		//   $image = $category->image;
      //   dd($image);
        return view('shop.category.index')->with('categories', $categories);
    }


    public function show($locale, Category $category)
    {
        $categories = Category::all();
        $category->products()->get();
		  $products = $category->products()->get();
		//   $image = $category->image;
        // dd($category);
        return view('shop.category.show', compact('category', 'products'))->with('categories', $categories);
    }
}