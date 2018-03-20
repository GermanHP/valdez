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
    //se obtienen todas las reservas realizadas y se paginaa a 5 por vista
    public function index()
    {
        $merliot = Reservas::where('idSucursal', 1)->get();
        $escalon = Reservas::where('idSucursal', 2)->get();
        $cascadas = Reservas::where('idSucursal', 3)->get();
        $smiguel = Reservas::where('idSucursal', 4)->get();

        return view('admin.reservas.inbox', compact('merliot', 'escalon', 'cascadas', 'smiguel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //se lista las opciones de optimización, los centros de reserva, las características del producto y se devuelve la vista para realizar la reserva
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //se muestra los detalles de la reserva
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
    //se llama lo almacenado del producto y se devuelve la vista con los datos a ser actualizados
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

        return view('admin.formulariosProducto.edit')
            ->withProductos($productos)
            ->withCategories($cats)
            ->withCentros($centros2);
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

    public function reservaMerliot(){
        $reservas = Reservas::where('idSucursal', 1)->orderBy('id', 'DESC')->get();

        return view('admin.reservas.reservaCentros.merliot', compact('reservas'));
    }

    public function reservaEscalon(){
        $reservas = Reservas::where('idSucursal', 2)->orderBy('id', 'DESC')->get();

        return view('admin.reservas.reservaCentros.escalon', compact('reservas'));
    }

    public function reservaCascadas(){
        $reservas = Reservas::where('idSucursal', 3)->orderBy('id', 'DESC')->get();

        return view('admin.reservas.reservaCentros.cascadas', compact('reservas'));
    }

    public function reservaSMiguel(){
        $reservas = Reservas::where('idSucursal', 4)->orderBy('id', 'DESC')->get();

        return view('admin.reservas.reservaCentros.smiguel', compact('reservas'));
    }
}
