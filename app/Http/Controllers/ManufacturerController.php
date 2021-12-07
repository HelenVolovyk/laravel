<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
	public function show($locale, Manufacturer $category)
	{
		 $manufacturer = Manufacturer::all();
		 $manufacturer->products()->get();
		 $products = $manufacturer->products()->get();
	
		//  dd($manufacturers);
		 return view('shop.manufacturer.show', compact('manufacturer', 'products'))->with('manufacturers', $manufacturers);
	}
}