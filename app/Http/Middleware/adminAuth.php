<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class adminAuth
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
        if( !$request->session()->has('USER_NAME')){
            return redirect()->route('login')->with('unac', 'Unauthorized Activity!!');
        }
        return $next($request);

    }
}
