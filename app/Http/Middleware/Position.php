<?php

namespace App\Http\Middleware;

use Closure;

class Position
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
        // return $next($request);
        return redirect()->route('home');
        // Middleware phân quyền

    }
}
