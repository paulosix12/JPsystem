<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Autorizador
{
    public function handle($request, Closure $next)
    {
        if (!$request->is('home') /Auth::guest()){
            return redirect('/home'); 
        }
        return $next($request);
    }
}
