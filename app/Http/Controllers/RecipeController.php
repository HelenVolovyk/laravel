<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
   public function show(Recipe $recipe){
		
		$image = $recipe->image()->first()->path;
		$components = $recipe->components;
		//dd($image);
		return view('pages.recipe.show', compact('recipe', 'image', 'components'));
	}

	public function index()
	{
		
		$recipes = Recipe::all()->sortByDesc('created_at');
		$metaTitle =  __('recipes') ;
		
		return view('pages.recipes', compact('recipes'), ['metaTitle' => $metaTitle]);
	}
}