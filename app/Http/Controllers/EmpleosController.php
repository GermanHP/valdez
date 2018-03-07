<?php

namespace App\Http\Controllers;

use App\Models\Empleos;
use App\Models\Puestos;
use Barryvdh\DomPDF\Facade as  PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class EmpleosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //se listan todas las plazas disponibles para aplicar devolviendo a  la vez la vista en la que se ingresarán los datos del candidato
    public function index()
    {
        $puestos = Puestos::pluck('nombre', 'id');

        return view('empleos.candidato', compact('puestos'));
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
    //se almacena en la base de datos lo que se envía a través del formulario de creación del currículo
    public function store(Request $request)
    {
        $candidato = new Empleos();
        $candidato->fill([
           'nombreCandidato'=>$request['nombreCandidato'],
            'apellidoCandidato'=>$request['apellidoCandidato'],
            'DUICandidato'=>$request['numeroDUI'],
            'direccionCandidato'=>$request['direccionCandidato'],
            'telefonoCandidato'=>$request['telefonoCliente'],
            'edadCandidato'=>$request['edad'],
            'emailCandidato'=>$request['correoCandidato'],
            'empresa1'=>$request['empresa1'],
            'experiencia1'=>$request['mensaje1'],
            'empresa2'=>$request['empresa2'],
            'experiencia2'=>$request['mensaje2'],
            'id_puesto'=>$request['puestos']
        ]);

        $candidato->save();

        //se almacena la imagen proporcionada para el perfil del candidato
        if ($request->hasFile('featured_foto')){

            $image = $request->file('featured_foto');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/candidatos/foto' . $filename);
            Image::make($image)->save($location);

            $candidato->foto = $filename;
        }

        $candidato->save();

        Session::flash('succes', 'Producto Registrado Exitosamente');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //se llama al candidato por medio del id para visualizar su perfil
    public function show($id)
    {
        $candidatos = Empleos::find($id);

        return view('admin.candidatos.show', compact('candidatos'));
    }

    public function vistaHTMLPDF(Request $request){
        $curriculo = Empleos::all()->first();

        view()->share('curriculo', $curriculo);
        if ($request->has('descargar')){
            $pdf = PDF::loadView('admin.candidatos.vista-html-pdf');
            return $pdf->download('Currículo Candidato');
        }

        return view('admin.candidatos.vista-html-pdf');
    }

    //se muestra en la tabla todos los candidatos que han aplicado
    public function mostrarCandidatos(Request $request){
        $candidatos = Empleos::paginate(10);


        return view('admin.candidatos.verCandidatos', compact('candidatos'));
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
