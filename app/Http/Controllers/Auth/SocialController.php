<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Hash;



// class SocialController extends Controller
// {

// 	public function redirect($provider)
// 	{
		
// 		return Socialite::driver($provider)->redirect();
// 	}

	
// 	 public function callback($provider)
// 	{
// 		$getInfo = Socialite::driver($provider)->user();
// 		$user = $this->createUser($getInfo, $provider);
// 		Auth::login($user);
// 		return redirect('/');

		 
// 	}

// 	function createUser($getInfo, $provider)
// 	{
// 		$user = User::where('social_account_id', $getInfo->id)->first();

// 		if(!$user)
// 		{
// 			$user = User::create([
// 				'name' => $getInfo->name,
// 				'email' => $getInfo->email,
// 				'social_account_id' => $getInfo->id,
// 				'provider' => $provider,
// 				'password' => bcrypt(rand(25)), 
					
// 			]);
// 		}
// 		return $user;
// 	}






	// public function redirectToProvider($provider)
	// {
	// 	 return Socialite::driver($provider)->redirect();
	// }



	// public function handleProviderCallback($provider)
	// {
		
	// 	$socialiteUser = Socialite::driver($provider)->user();
	// 	dd($socialiteUser);

	// 	$user = $this->findOrCreateUser($provider, $socialiteUser);
	// 	Auth::login($user, true);

	// 	return redirect('/');
	// }


	// public function findOrCreateUser($provider, $socialiteUser)
	// {
	// 	if ($user = $this->findUserBySocialId($provider, $socialiteUser->getId())) {
	// 		return $user;
	// 	}

	// 	if ($user = $this->findUserByEmail($provider, $socialiteUser->getEmail())) {
	// 		$this->addSocialAccount($provider, $user, $socialiteUser);

	// 		return $user;
	// 	}

	// 	$user = User::create([
	// 		'name' => $socialiteUser->getName(),
	// 		'email' => $socialiteUser->getEmail(),
	// 		'social_acount_id' => $socialiteUser->getId(),
	// 		'provider' => $provider,
	// 		'password' => bcrypt(rand(25)),
	// 	]);

	// 	$this->addSocialAccount($provider, $user, $socialiteUser);

	// 	return $user;
	// }
//}
