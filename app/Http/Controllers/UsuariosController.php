<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestNuevoUsuario;
use App\Http\Requests\ResetPassword;
use App\Models\Bitacora;
use App\Models\Reservas;
use App\Models\Rolessistema;
use App\Models\Rolessistemausuario;
use App\User;
use App\Utilities\Rol_Identificador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UsuariosController extends Controller
{
    public function contactos(){
        $usuarios = Reservas::all();
        $usuarios2 = Reservas::paginate(10);

        return view('admin.usuarios.contactos', compact('usuarios', 'usuarios2'));
    }

    public function usuariosSistema(){
        $usuarios = User::where('id', '!=', Auth::user()->id)->get();
        $usuarios2 = User::paginate(10);

        return view('admin.usuarios.usuariosTodos', compact('usuarios', 'usuarios2'));
    }

    public function crearNuevoUsuario(){
        $roles = Rolessistema::all();

        return view('admin.usuarios.nuevoUsuario', compact('roles'));
    }

    public function store(Request $request){
        $user = new User();
        $user->fill([
            "nombre"=>$request["nombre"],
            "apellido"=>$request["apellido"],
            "fechaDeNacimiento"=>$request["fechaDeNacimiento"],
            "genero"=>$request["genero"],
            "DUI"=>$request["DUI"],
            "email"=>$request["email"],
            'telefono'=>$request['userTelefono'],
            "resetPassword"=>1,
            "password"=>bcrypt("vivelaexperiencia2018")
        ]);
        $user->save();
        foreach ($request['rolUsuario']as $rol){
            $rolUsuario = new Rolessistemausuario();
            $rolUsuario->fill([
                "idRolSistema"=>$rol,
                "idUsuario"=>$user->id,
            ]);
            $rolUsuario->save();
        }

        $bitacora = new Bitacora();
        $bitacora->fill([
           'idUsuario'=>Auth::user()->getAuthIdentifier(),
           'accion'=>'Cración de Usuario',
           'otraInformacion'=>'Usuario creado exitosamente'
        ]);

        $bitacora->save();

        Session::flash('Registro Exitoso', 'success');
        return redirect()->back();
    }

    public function cambiarPassword(){
        return view('auth.cambiarPassowrd');
    }

    public function guardarPassword(ResetPassword $request){
        if($request['password']==$request['password_confirmation']&&$request['password']!='vivelaexperiencia2018'){
            $user =  User::find(Auth::user()->id);
            $user->fill([
                "password"=>bcrypt($request['password']),
                "resetPassword"=>'0'
            ]);
            $user->save();

            $bitacora = new Bitacora();
            $bitacora->fill([
                'idUsuario'=>Auth::user()->getAuthIdentifier(),
                'accion'=>'Contraseña Actualizada',
                'otraInformacion'=>'Contraseña por defecto cambiada'
            ]);

            if(Auth::user()->idRolSistema=1){
                return redirect('/inbox');
            }else if(Auth::user()->idRolSistema=2){
                return redirect('/contactos');
            }else{
                return redirect('/quienes-somos');
            }
        }else{
            Session::flash('Error contraseñas no coiciden','danger');
            return redirect()->back()->withInput();
        }
    }

    public function editar($id){
        $user = User::find($id);
        $roles = Rolessistema::all();

        return view('admin.usuarios.editarUsuario', compact('user', 'roles'));
    }

    public function update(RequestNuevoUsuario $request, $id){

        $user = User::find($id);
        $user->fill([
            "nombre"=>$request["nombre"],
            "apellido"=>$request["apellido"],
            "fechaDeNacimiento"=>$request["fechaDeNacimiento"],
            "genero"=>$request["genero"],
            "DUI"=>$request["DUI"],
            "email"=>$request["email"],
            "telefono"=>$request["userTelefono"],
            "resetPassword"=>1,
            "password"=>bcrypt("vivelaexperiencia2018")
        ]);
        $user->save();

        foreach ($user->roles_sistema_usuario as $rolesAsignados){
            $rolesAsignados->delete();
        }
        foreach ($request['rolUsuario']as $rol){
            $rolUsuario = new Rolessistemausuario();
            $rolUsuario->fill([
                "idRolSistema"=>$rol,
                "idUsuario"=>$user->id,
            ]);
            $rolUsuario->save();
        }
        Session::flash('Registro Exitoso', 'success');
        return redirect()->back();
    }
}