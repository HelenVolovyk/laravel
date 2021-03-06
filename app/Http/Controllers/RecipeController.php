<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
   public function show(Recipe $recipe){
		
		$image = $recipe->image()->first()->path;
		//dd($image);
		return view('pages.recipe.show', compact('recipe', 'image'));
	}
}