<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HRCheck
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
        if (Auth::check()) {

            if (Auth::User()->department == '0') {
                
                return $next($request);
    
            }
    
            if (Auth::User()->department == '1' || '2' || '3' || '4') {
            
                return redirect('dashboard')->with('fail', 'Login');
    
            }

            else {
                return redirect('login')->with('fail', 'Login');
            }
    
        }

    }
    
}