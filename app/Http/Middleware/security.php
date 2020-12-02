<?php

namespace App\Http\Middleware;

use Closure;

class security
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
        if (Auth::check() && Auth::user()->Position_ID == 1) {
            # code...
            return $next($request);
        }else
        {
            return view('auth.login')->with('alert', 'Thay đổi đường link cũng không giúp ích cho bạn đâu');
        }

    }
}
// Phải xóa thằng này 1.