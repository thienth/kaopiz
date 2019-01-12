<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuth
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
        // 1. Phai dang nhap 
        // 2. Role cua user > 1
        if(!Auth::check() || Auth::user()->role <= 1){
            return redirect(route('login'));
        }

        
        return $next($request);
    }
}
