<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestSubirArchivo;
use App\Models\Archivo;
use App\Utilities\GenerarToken;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StorageController extends Controller
{
    public function index(){

    }

    public function store(RequestSubirArchivo $request){
        $file = $request->file('Archivo');
        dd($file);
    }

    public function MostrarArchivos(){
        $archivos = Archivo::all();
        return view('SubirArchivos.MostrarArchivos', compact('archivos'));
    }

    public function DescargarArchivo($id,$archivo){

        $arc = Archivo::find($id);

        if($arc->count()==0){
            abort(404);
        }
        else{
            if($arc->nombreArchivo==$archivo){
                $numeroDeDescargas= $arc->numeroDescargas+1;
                $arc->fill([
                    'numeroDescargas'=>$numeroDeDescargas
                ]);
                $arc->save();
                $public_path = public_path();
                $url = $public_path.'/storage/'.$archivo;
                //verificamos si el archivo existe y lo retornamos
                if (Storage::exists($archivo))
                {
                    return response()->download($url);
                }
            }

        }

        //si no se encuentra lanzamos un error 404.
        abort(404);
    }
    public function EliminarArchivo($id, $nombreArchivo,$created_at){
        $archivo = Archivo::where('id',$id)->where('nombreArchivo',$nombreArchivo)->where('created_at',$created_at)->first();
        if($archivo->count()>0){
            Storage::delete($archivo->nombreArchivo);
            $archivo->delete();
        }

        Session::flash('Archivo Eliminado exitosamente','info');
        return redirect()->back();
    }
}
