<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Otherimage;
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

			//dd($page);
		return view('pages.' .  $page , ['metaTitle' => $metaTitle], compact('otherimages'));
	}
	
	public function reviews($locale, Comment $comment, User $user)
	{
		$otherimages = Otherimage::all();
		$comments = Comment::where('print', 1)->get(); 
		// $userName = User::
		
			// $user = User::where('id', $comment->user->id)->first();
			$date = $comment->created_at;
			// $commenti = $comment->comment;
	
		// echo($da);
		// dd($commenti);
		
      return view('pages.reviews', compact('otherimages', 'comments', 'comment',  'date', 'user'));
		
	}

 }