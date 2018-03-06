<?php

namespace App\Http\Controllers;

use App\Http\Requests\MakeReservaRequest;
use App\Models\Bitacora;
use App\Models\Category;
use App\Models\Centros;
use App\Models\Disco;
use App\Models\RAM;
use App\Models\ReservaCentro;
use App\Models\Reservaproductos;
use App\Models\Reservas;
use App\Models\Rolessistemausuario;
use App\Producto;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class GestionReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reservas::orderBy('id', 'DESC')->simplePaginate(5);

        return view('admin.reservas.inbox')->withReservas($reservas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($url)
    {
        $ram = RAM::pluck('nombre', 'id');
        $disco = Disco::pluck('nombre', 'id');
        $producto = Producto::where('url', '=', $url)->first();
        $centros = Centros::pluck('nombre', 'id');

        return view('productos.reservas.makeReserva', compact('producto', 'centros', 'ram', 'disco'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $user = new User;
        $user->fill([
           'nombre'=>$request['nombres'],
            'apellido'=>$request['apellidos'],
            'DUI'=>$request['numeroDUI'],
            'fechaDeNacimiento'=>$request['fechaNacimiento'],
            'genero'=>$request['genero'],
            'email'=>$request['correoReserva'],
            'telefono'=>$request['telefonoCliente'],
            'password'=>bcrypt('vivelaexperiencia2018'),
            'resetPassword'=>1
        ]);
        $user->save();

        $rolUsuario = new Rolessistemausuario();
        $rolUsuario->fill([
            'idRolSistema'=>4,
            'idUsuario'=>$user->id,
        ]);
        $rolUsuario->save();
        */

        $reserva = new Reservas();
        $reserva->fill([
            'estado'=>1,
            'nombreCliente'=>$request['nombres'],
            'apellidoCliente'=>$request['apellidos'],
            'DUICliente'=>$request['numeroDUI'],
            'emailCliente'=>$request['correoReserva'],
            'telefonoCliente'=>$request['telefonoCliente'],
            'nombreProducto'=>$request['nombreProducto'],
            'precio'=>$request['precioProducto'],
            'fabricante'=>$request['fabricanteProducto'],
            'mensajeOpcional'=>$request['mensaje'],
            'spec1'=>$request['caract1'],
            'spec2'=>$request['caract2'],
            'spec3'=>$request['caract3'],
            'spec4'=>$request['caract4'],
            'idSucursal'=>$request['centroLiqui'],
            'image'=>$request['imageProducto'],
            'fechaDeVigencia'=>$request['creadoEn'],
            'idRam'=>$request['optimizaRam'],
            'idDisco'=>$request['optimizaDisco']
        ]);
        $reserva->save();

        $bitacora = new Bitacora();
        $bitacora->fill([
           'idUusario'=>Reservas::all('nombreCliente'),
            'accion'=>'Reserva',
            'otraInformacion'=>'Reserva Correcta'
        ]);
        /*
        foreach ($request['centroLiqui']as $centro){
            $centroReserva = new ReservaCentro();
            $centroReserva->fill([
                "idCentro"=>$centro,
                "idReserva"=>$reserva->id,
            ]);
            $centroReserva->save();
        }
*/
        Session::flash('Reserva Realizada con Éxito', 'success');
        return view('productos.reservas.estadoReserva', compact('reserva'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserva = Reservas::find($id);

        return view('admin.reservas.showReserva', compact('reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = Producto::find($id);
        $categories = Category::all();
        $cats = array();

        foreach ($categories as $category){
            $cats[$category->id] = $category->nombre;
        }

        $centros = Centros::all();
        $centros2 = array();
        foreach ($centros as $centro){
            $centros2[$centro->id] = $centro->nombre;
        }

        return view('admin.formulariosProducto.edit')->withProductos($productos)->withCategories($cats)->withCentros($centros2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reservas::destroy($id);

        return redirect()->back();
    }
}
