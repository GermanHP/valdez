<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MakeReservaRequest extends FormRequest
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

    //aquí se colocan las reglas a seguir para el almacenamiento de los datos que están en el formulario de reserva
    public function rules()
    {
        return [
            'nombreCliente'=>'string',
            'apellidoCliente'=>'string',
            'DUICliente'=>'unique:DUICliente,DUICliente|size:9|regex:/^([0-9])+$/i',
            'emailCliente'=>'email',
            'telefonoCliente'=>'numeric|digits:8|min:0|integer',
            'mensajeOpcional'=>'string'
        ];
    }
}
