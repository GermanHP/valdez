<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Bitacora;
use App\Utilities\Rol_Identificador;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/inbox';

    protected function redirectTo(){
        $bitacora = new Bitacora();
        $bitacora->fill([
            'idUsuario'=>Auth::user()->getAuthIdentifier(),
            'accion'=>'LOGIN',
            'otraInformacion'=>'LOGIN correcto'
        ]);

        $bitacora->save();

        if (Auth::user()->resetPassword==1){
            return '/CambiarContraseña';
        }elseif (Auth::user()->idRolSistema=1){
            return '/inbox';
        }elseif (Auth::user()->idRolSistema=2){
            return '/contactos';
        }else{
            return '/';
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
