<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Manufacturer;


class ManufacturerController extends Controller
{
	public function show($locale, Manufacturer $manufacturer, Category $category)
	{
		
		$manufacturers = Manufacturer::all();
		$category = Category::all();
		$parentCategories = Category::where('parent_id',0)->get();
	
		$manufacturer->products()->get();
		$products = $manufacturer->products()->get();

		return view('shop.manufacturer.show', compact('manufacturer', 'products', 'parentCategories'))->with('manufacturers', $manufacturers);
	}
}