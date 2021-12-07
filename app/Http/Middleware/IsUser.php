<?php

namespace App\Http\Middleware;

use Closure;

class IsUser
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
         
        if(auth()->user()->IsUser){
            return $next($request);
        }
        
        return redirect('/')->with(['customError' => 'This page only for registered users']);
       
    }
}
