<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;

class ProductosController extends Controller
{
    public function mostrarProductos(){
        $productos = Producto::paginate(6);

        return view('productos.mostrarProductos')->withProductos($productos);
    }

    public function detalleProducto($url){

        $productos = Producto::where('url', '=', $url)->first();

        return view('productos.detalleProducto')->withProductos($productos);
    }

    public function showSmartphones(){
        $smartPhones = Producto::where('category_id', 3)->orderBy('id', 'DESC')->get();

        return view('productos.smartPhones.showSmartPhones', compact('smartPhones'));
    }


}