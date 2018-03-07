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
    //se obtienen los datos de contacto de los clientes que hayan realizado una reserva en el sistema
    public function contactos(){
        $usuarios = Reservas::all();
        $usuarios2 = Reservas::paginate(10);

        return view('admin.usuarios.contactos', compact('usuarios', 'usuarios2'));
    }

    //se obtienen todos los usuarios que cuentan con un perfil en el sistema
    public function usuariosSistema(){
        $usuarios = User::where('id', '!=', Auth::user()->id)->get();
        $usuarios2 = User::paginate(10);

        return view('admin.usuarios.usuariosTodos', compact('usuarios', 'usuarios2'));
    }

    //se listan los roles para ser asignados al nuevo usuario y se devuelve la vista para proceder a ser registrado
    public function crearNuevoUsuario(){
        $roles = Rolessistema::all();

        return view('admin.usuarios.nuevoUsuario', compact('roles'));
    }

    //se almacena toda la data del nuevo usuario registrado
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

        $bitacora = new Bitacora();//se registra la operación correspondiente en la bitacora
        $bitacora->fill([
           'idUsuario'=>Auth::user()->getAuthIdentifier(),
           'accion'=>'Cración de Usuario',
           'otraInformacion'=>'Usuario creado exitosamente'
        ]);

        $bitacora->save();

        Session::flash('Registro Exitoso', 'success');
        return redirect()->back();
    }

    //se devuelve la vista para cambiar la clave de acceso
    public function cambiarPassword(){
        return view('auth.cambiarPassowrd');
    }

    //se cambia la contraseña y se vuelve el estado de resetpassword a 0 y se almacena en la base de datos
    public function guardarPassword(ResetPassword $request){
        if($request['password']==$request['password_confirmation']&&$request['password']!='vivelaexperiencia2018'){
            $user =  User::find(Auth::user()->id);
            $user->fill([
                "password"=>bcrypt($request['password']),
                "resetPassword"=>'0'
            ]);
            $user->save();

            $bitacora = new Bitacora();//se registra la operación correspondiente en la bitacora
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

    //se listan los datos almacenados para el usuario creado y se devuelve la vista para proceder con la edición
    public function editar($id){
        $user = User::find($id);
        $roles = Rolessistema::all();

        return view('admin.usuarios.editarUsuario', compact('user', 'roles'));
    }

    //se actualizan los datos del usuario que ha sido editado
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

        $bitacora = new Bitacora();//se registra la acción correspondiente en la bitacora
        $bitacora->fill([
            'idUsuario'=>Auth::user()->getAuthIdentifier(),
            'accion'=>'Usuario Actualizado',
            'otraInformacion'=>'Usuario Actualizado con Éxito'
        ]);

        $bitacora->save();

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