<?php

namespace App\Http\Middleware;

use App\Utilities\Rol_Identificador;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()){

            if (Auth::user()->idRolSistema=1){
                return redirect('/inbox');
            }else if (Auth::user()->idRolSistema=2){
                return redirect('/contactos');
            }else{
                return redirect('quienes-somos');
            }
        }

        return $next($request);
    }
}
