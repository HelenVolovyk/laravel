<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		/**
		 * Handle an incoming request.
		 *
		 * @param  \Illuminate\Http\Request  $request
		 * @param  \Closure  $next
		 * @return mixed
		 */




		if (request('change_language')) {
			session()->put('language', request('change_language'));
			$language = request('change_language');
		} elseif (session('language')) {
			$language = session('language');
		} elseif (config('app.locale')) {
			$language = config('app.locale');
		}

		if (isset($language) && config('app.languages', $language)) {
			app()->setLocale($language);
		}


		

			// 											$locale = session('locale');
			// 											App::setLocale($locale);
			// dd($locale);


		

		// $langPrefix = ltrim($request->route()->getPrefix(), '/');
		// if ($langPrefix) {
		// 	App::setlocale($langPrefix);
		// }

		// dd($langPrefix);

		return $next($request);
	}
}