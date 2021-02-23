<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Otherimage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OtherimageController extends Controller
{
    function create(){
		 return view('admin.images.create');
	 }
	 
	 function store(Request $request) {
		 //dd(Storage::disk('public')->path('images'));
		
		

			if (!empty($request->file('img_src'))) {
            $imageService = app()->make(\App\Services\Contract\ImageServiceInterface::class);
            $filePath = $imageService->upload($request->file('img_src'));
		
		 

			
			
			 $otherimage = new Otherimage;
			 $otherimage->img_alt = $request->img_alt;
			 $otherimage->img_src =  $filePath;
			 $otherimage->save();
			 
			 return redirect('image/create')->with(['status' => 'Image success upload']);
		 }else{
			 return redirect('image/create')->with(['customeError' => 'Please choose file']);
		 }
}
}