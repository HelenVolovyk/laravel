<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class RatingController extends Controller
{
	
/**
 * @param Product $product
 */

   public function add(Request $request)
   {
		$b = explode('/', $_SERVER['REQUEST_URI']);
		$e = array_pop($b);
		$product = Product::where('webname', $e)->first();
			
      $product->rateOnce($request->star);

      return redirect()->back()->with(['status' => 'Your rating was added']);
   }
}