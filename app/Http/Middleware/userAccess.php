<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class userAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){
        //Check if user is logged...if user isnt, 
        //goto login
        if(!Auth::check()) {
          return redirect ('login');}
        //If user is logged, perform next command
        return $next($request);
    }
}
