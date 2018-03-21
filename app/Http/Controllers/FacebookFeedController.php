<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class FacebookFeedController extends Controller
{
    public function feed(){
        $liquidaciones =  Producto::where('estado', 2)->orderBy('id', 'DESC')->get();

        return view('liquidaciones.liquidacionesHoy', compact('liquidaciones'));
    }
}
