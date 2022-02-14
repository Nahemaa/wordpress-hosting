<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

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
        if(!Session()->has('HRID')) {
            
            return redirect('dashboard')->with('fail', 'Login');

        }

        return $next($request);
    }
}
