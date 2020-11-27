<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	// public function __construct()
	// {
	//     $this->middleware('auth');
	// }

	/**
	 * Show the application dashboard.
	 * @param Product $products
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{

		$products = Product::inRandomOrder()->take(3)->where('quantity', '>', '0')->get();
		//$products = Product::with('category')->where('quantity', '>', '0')->paginate(10);
		$categories = Category::all();
		return view('home.index', compact('categories', 'products'));
	}

	public function changeLocale($locale)
	{

		
		 $currentLocale =App::getLocale();
		 dd($currentLocale);

		// return redirect()->back();

		//App::setlocale($locale);
		//store the locale in session so that the middleware can register it
		// session()->put('locale', $locale);
		// return redirect()->back();

	}



}


