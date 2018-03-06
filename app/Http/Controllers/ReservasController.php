<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function detalleReserva(){
        return view('productos.reservas.productoReservado');
    }

    public function optimizarProducto(){
        return view('productos.reservas.optimizarReserva');
    }
}
