<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCheck
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

        if (!Auth::check()) {

            return redirect('login')->with('fail', 'Login');
        
        }

       else {

        return $next($request);

       }

    }
    
}
/*
if (Auth::User()->department == '1' || '2' || '3' || '4') {
            
    return $next($request);

}
*/