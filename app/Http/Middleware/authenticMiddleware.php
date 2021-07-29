<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class authenticMiddleware
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

        
        if(!session()->has('email') && ($request->path() == 'dashboard')){
            return back();
        }
        elseif(session()->has('email') && (($request->path() == 'login') || ($request->path() == 'registration'))){
            return redirect('dashboard');
        }

        return $next($request);
    }
}
