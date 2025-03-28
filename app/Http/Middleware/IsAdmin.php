<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        if(auth()->user()->hasRole(1)){
            return $next($request);
        }

        return redirect('home')->with('error',"You don't have admin access.");
    }
}
