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
