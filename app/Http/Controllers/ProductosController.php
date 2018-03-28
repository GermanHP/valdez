<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;

class ProductosController extends Controller
{
    //se obtienen todos los productos y se paginan a 6 por vista
    public function mostrarProductos(){
        $productos = Producto::paginate(6);

        return view('productos.mostrarProductos')->withProductos($productos);
    }

    //se muestran los detalles del producto y se devuelve la vista correspondiente
    public function detalleProducto($url){

        $productos = Producto::where('url', '=', $url)->first();
        $productoVenta = Producto::all();

        return view('productos.detalleProducto', compact('productoVenta', 'productos'));
    }

    //se muestra la vista correspondiente a los productos unicamente con el id de smartphone
    public function showSmartphones(){
        $smartPhones = Producto::where('category_id', 3)->orderBy('id', 'DESC')->get();

        return view('productos.smartPhones.showSmartPhones', compact('smartPhones'));
    }

}