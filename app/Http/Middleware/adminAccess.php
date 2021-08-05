<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class adminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
     
    if(Auth::check()) {
      if(Auth::user()->user_type!='admin'){
         return redirect ('/'); }}
    else {
      return redirect ('login');}
    return $next($request);
    }
}
