<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class LoggedIN
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

        if (Session()->has('loginID') && url('login')==$request->url() || url('dashboard')==$request->url())
        {
            return redirect()->back();
        }
        return $next($request);
    }
}
