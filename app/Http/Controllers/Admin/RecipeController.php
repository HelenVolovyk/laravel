<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        // dd($recipe);
        return view('admin/recipes/index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/recipes/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreaterecipeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request);
        //dd($request->file('recipe_images'));
		  $recipe = $request->all();
		  
		  $imageService   = app()->make(\App\Services\Contract\ImageServiceInterface::class);
		  
   

        if (!empty($request->file('thumbnail'))) {
           
            $filePath       = $imageService->upload($request->file('thumbnail'));
            $recipe['thumbnail'] = $filePath;
        }

        $recipe = Recipe::create($recipe);
        

        if (!empty($request->file('image'))) {
	           
                $filePath       = $imageService->upload($request->file('image'));
                $recipe->image()->create(['path' => $filePath]);
            
        }
//dd($recipe);
        return redirect(route('admin.recipes.index'))
            ->with(['status' => 'The recipe has been created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit( Recipe $recipe)
    {
		  		//dd($recipe); 
		 
       
        return view('admin/recipes/edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
  // dd($request->recipe);
   

        $recipe->update([
            'title'              	=> $request->get('title'),
				'title_uk'           	=> $request->get('title_uk'),
				'thumbnail'         		=> $request->file('thumbnail'),
            'description'        	=> $request->get('description'),
            'description_uk'     	=> $request->get('description_uk'),
            'shot_description'     	=> $request->get('description'),
            'shot_description_uk'  	=> $request->get('description_uk'),
            'components'      		=> $request->get('components'),
            'components_uk'      	=> $request->get('components_uk'),
          	
			
        ]);
		
  
   

        if (!empty($request->file('image'))) {
             $imageService   = app()->make(\App\Services\Contract\ImageServiceInterface::class);
             $filePath       = $imageService->upload($request->file('image'));
             $oldImage       = $recipe->image()->first();

            if (!is_null($oldImage)) {
                $imageService->remove($oldImage->path);
            }
    
            if (is_null($oldImage)) {
                $recipe->image()->create(['path' => $filePath]);
            } else {
                $recipe->image()->update(['path' => $filePath]);
            }
        }
      
        //dd($request->files);

        return redirect()
            ->back()
            ->with(['status' => 'The recipe was successfully updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        $recipe->image()->delete();
     

        return redirect(route('admin.recipes.index'))
            ->with(['status' => 'The recipe was successfully removed!']);
    }
}