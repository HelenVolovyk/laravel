<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Otherimage;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller
{


public $parentCategories;

    public function index($locale, Category $categories)
    {
		
		  $categories = Category::all();
		  $parentCategories = Category::where('parent_id',0)->get();

        return view('shop.category.index', compact('parentCategories'))->with('categories', $categories);
    }


	

	 
    public function show($locale, Category $category)
    {
        $categories = Category::all();
      //    $category->products()->get();
		//   $products = $category->products()->get();
    
		$parentCategories = Category::where('parent_id',0)->get();
		$manufacturers = Manufacturer::all();
		
		$category_ids = $category->getDescendants($category);
		$products = Product::whereIn('category_id',$category_ids)->take(6)->paginate(6);
		

		return view('shop.category.show', compact('parentCategories',  'category', 'products', 'manufacturers'))->with('categories', $categories);
	 }
	 
	 
	 
   
}