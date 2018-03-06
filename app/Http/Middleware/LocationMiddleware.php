<?php

namespace App\Http\Middleware;

use Closure;

class LocationMiddleware
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
        //se crea la función que detecta la ubicación
        if(!empty(session('lang'))){
            App::setLocale(session('lang'));
        }
        return $next($request);
    }
}
