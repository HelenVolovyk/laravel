<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Otherimage;
use App\Models\Product;
use App\Models\User;

class PageController extends Controller
{

	public function index($locale, $page)
	{
		$otherimages = Otherimage::all();
		$metaTitle = __('Meta Title: ' . $page);
		if($metaTitle == 'Meta Title: ' . $page){
			$metaTitle = NULL;
		}

		return view('pages.' .  $page , ['metaTitle' => $metaTitle], compact('otherimages'));
	}
	
	public function reviews($locale, Comment $comment)
	{
		$otherimages = Otherimage::all();
		$comments = Comment::where('print', 1)->get(); 
		
      return view('pages.reviews', compact('otherimages', 'comments'));
	}

 }