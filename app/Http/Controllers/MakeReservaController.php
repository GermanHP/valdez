<?php

namespace App\Http\Controllers;

use App\Http\Requests\MakeReservaRequest;
use App\Models\Bitacora;
use App\Models\Reservas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MakeReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MakeReservaRequest $request)
    {
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
            'idDisco'=>$request['optimizaDisco'],
            'deleted_at'=>Carbon::now('America/El_Salvador')->addMinute(2)
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}