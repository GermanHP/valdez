<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestNuevoUsuario extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//se cambia a true el valor por defecto al crear el request para que tengan efecto las validaciones
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    //se registran las reglas para validar el contenido de los campos que se encuentran en el formulario de registro
    public function rules()
    {
        return [
            "nombre"=>'required|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            "apellido"=>'required|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            "email"=>'nullable|email',
            'genero'=>'required|numeric|between:0,1',
            'DUI'=>'nullable|unique:users,DUI|size:9|regex:/^([0-9])+$/i',
            "fechaDeNacimiento"=>'date',
            "rolUsuario"=>'required|array|exists:roles_sistema,id'
        ];
    }
}
