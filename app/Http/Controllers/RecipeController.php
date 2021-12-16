<?php

namespace App\Http\Controllers;

use App\Models\Otherimage;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
   public function show($locale, Recipe $recipe){
	
		$a = $_SERVER['REQUEST_URI'];
		$b = explode('/', $_SERVER['REQUEST_URI']);
		
		 $c = array_slice($b, 2);
	
		//dd($c);
		
		$image = $recipe->image()->first()->path;
	
		return view('pages.recipe.show', compact('recipe', 'image'), $c);
	}

	public function index($locale)
	{
		
		
	
		
		
		$recipes = Recipe::all()->sortByDesc('created_at');
		$metaTitle =  __('recipes') ;
	
		return view('pages.recipes', compact('recipes'), ['metaTitle' => $metaTitle]);
	}


}