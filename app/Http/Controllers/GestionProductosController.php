<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Models\Bitacora;
use App\Models\Category;
use App\Models\CategoryClient;
use App\Models\Centros;
use App\Producto;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class GestionProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::orderBy('id', 'DESC')->simplePaginate(5);

        return view('admin.formulariosProducto.productosRegistrados')->withProductos($productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('nombre', 'id');
        $clienteCat = CategoryClient::pluck('nombre', 'id');
        $centros = Centros::all();

        return view('admin.formulariosProducto.registrarProducto', compact('categories', 'centros', 'clienteCat'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoRequest $request)
    {

        // guardando en la base de datos
        $productos = new Producto;
        $productos->fill([
            'nombre'=>$request['modeloProducto'],
            'fabricante'=>$request['fabricante'],
            'url'=>$request['enlace'],
            'category_id'=>$request['category_id'],
            'category_client_id'=>$request['category_client_id'],
            'precioEs'=>$request['precioSalvador'],
            'precioPromoEs'=>$request['precioPromocion'],
            'caracteristica1'=>$request['especificacion1'],
            'caracteristica2'=>$request['especificacion2'],
            'caracteristica3'=>$request['especificacion3'],
            'caracteristica4'=>$request['especificacion4'],
            'stock'=>$request['stockEntrante']
        ]);

        $bitacora = new Bitacora();
        $bitacora->fill([
            'idUsuario'=>Auth::user()->getAuthIdentifier(),
            'otraInformacion'=>'Registro Correcto',
            'accion'=>'Registro de Producto'
        ]);
        $bitacora->save();

        $productos->save();

        if ($request->hasFile('featured_img')){

            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/enStock/img' . $filename);
            Image::make($image)->save($location);

            $productos->image = $filename;
        }

        $productos->save();

        $productos->centros()->sync($request->centros, false);

        Session::flash('succes', 'Producto Registrado Exitosamente');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productos = Producto::find($id);

        return view('admin.formulariosProducto.show')->withProductos($productos);
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
        $productos = Producto::find($id);

        //validando la data

        if ($request->input('url') == $productos->url){
            $this->validate($request, array(
               'nombre'           => 'required|max:255',
                'category_id'     => 'required|integer',
                'fabricante'      => 'required'
            ));
        }else{
            $this->validate($request, array(
                'nombre'           => 'required|max:255',
                'url'              => 'required|alpha_dash|min:5|max:255|unique:productos,url',
                'category_id'     => 'required|integer',
                'fabricante'      => 'required'
            ));
        }

        //guardando la data

        $productos = Producto::find($id);

        $productos->nombre              = $request->input('nombre');
        $productos->fabricante          = $request->input('fabricante');
        $productos->url                 = $request->input('url');
        $productos->category_id         = $request->input('category_id');
        $productos->precioEs            = $request->input('precioEs');
        $productos->precioPromoEs       = $request->input('precioPromoEs');
        $productos->caracteristica1     = $request->input('caracteristica1');
        $productos->caracteristica2     = $request->input('caracteristica2');
        $productos->caracteristica3     = $request->input('caracteristica3');
        $productos->caracteristica4     = $request->input('caracteristica4');

        $productos->save();

        $bitacora = new Bitacora();
        $bitacora->fill([
            'idUsuario'=>Auth::user()->getAuthIdentifier(),
            'otraInformacion'=>'Edición Correcta',
            'accion'=>'Producto Editado'
        ]);
        $bitacora->save();

        if ($request->hasFile('featured_img')) {
            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/enStock/img' . $filename);
            Image::make($image)->save($location);

            $productos->image = $filename;
        }

        if (isset($request->centros)){
            $productos->centros()->sync($request->centros);
        }else{
            $productos->centros()->sync(array());
        }

        Session::flash('succes', 'Éste producto fue actualizaco exitosamente');

        return redirect()->route('producto.show', $productos->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->centros()->detach();

        $producto->centros()->detach();

        Producto::destroy($id);

        $bitacora = new Bitacora();
        $bitacora->fill([
            'idUsuario'=>Auth::user()->getAuthIdentifier(),
            'otraInformacion'=>'Producto Eliminado',
            'accion'=>'Eliminar Producto'
        ]);
        $bitacora->save();

        Session::flash('message', 'El Registro Fue Eliminado');

        return redirect()->route('producto.index');
    }

    public function productsList(Request $request)
    {
        if($request->has('search')){
            $producto = Producto::search($request->search)
                ->paginate(6);
        }else{
            $producto = Producto::paginate(6);
        }
        return view('productos.mostrarProductos',compact('producto'));
    }
}