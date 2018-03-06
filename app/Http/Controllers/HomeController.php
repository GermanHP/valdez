<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sugeridos = Producto::all();

        $smartphones = Producto::where('category_id', 3)->orderBy('id', 'DESC')->get();

        $appleSect = Producto::where('fabricante', 'apple')->orderBy('id', 'DESC')->get();

        if($request->has('search')){
            $productos = Producto::search($request->search)
                ->paginate(6);
        }else{
            $productos = Producto::paginate(6);
        }


        return view('home', compact('sugeridos', 'smartphones', 'appleSect', 'productos'));
    }

    public function esencia(){
        return view('sections.quienesSomos');
    }

    public function search(Request $request){
        if ($request -> ajax()){
            $output="";
            $products = DB::table('productos')->where('nombre', 'LIKE', '%' .$request->search. "%")->get();

            if($products){
                foreach ($products as $key => $product){
                    $output.='<div class="card">'.
                            '<div class="card-image"'.
                        '<img src="{{asset(\'img/enStock/img\' . $product->image)}}" alt="Apple"
                                     class="responsive-img image-liquidacion">'.
                        '<div class="overlay">'.
                        '<div class="text center-align">'.
                        ' <a href="{{url(\'/reserva\')}}" class="yellow-text">RESERVAR</a>'.
                        '<hr class="divider">'.
                        '<a href="#sucursales" class="yellow-text">IR A TIENDA</a>'.
                        '<hr class="divider">'.
                        '<a href="{{ route(\'productos.detalleProducto\', $sugerencia->url) }}" class="yellow-text">VER DETALLES</a>'.
                        '</div>'.
                        '</div>'.
                        '</div>'.
                        '</div>'
                    ;
                }
            }
        }
    }
}