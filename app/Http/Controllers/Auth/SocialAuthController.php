<?php

namespace App\Http\Controllers\Auth;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    //Metodo encargado para redirigir a facebook
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    //Método encargado para obtener la información del usuario
    public function handleProviderCallback($provider)
    {
        //datos del usuario
        $social_user = Socialite::driver($provider)->user();
        //se comprueba si el usuario ya existe
        if ($user = Cliente::where('email', $social_user->email)->first()){
            return $this->authAndRedirect($user);
        }else{
            //En caso que no exista, se crea el usuario
            $user = Cliente::create([
               'name' => $social_user->name,
                'email' => $social_user->email,
                'avatar' => $social_user->avatar,
            ]);

            return $this->authAndRedirect($user); //login y redirección
        }
    }

    // Login y redirección
    public function authAndRedirect($user)
    {
        Auth::login($user);

        return redirect()->to('/my-dashboard');
    }
}
