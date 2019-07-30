<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Redirect;

class CEO
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



    if (Auth::user()->type == 0)
        return $next($request);
        else{return redirect()->to('admin/dashboaradmin');}
        return $next($request);
    }
}
