<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Overcategory;
use Illuminate\Http\Request;

class OvercategoryController extends Controller
{
	public function show($locale, Overcategory $overcategory)
	{
		$overcategories = Overcategory::all();
		dd($overcategories);
		// $overcategory->categories()->get();
		 $categories =  $overcategory->categories()->get();
	
		 
		 return view('shop.overcategory.show', compact('overcategory', 'category'))->with('overcategories',  $overcategories);
	}
}