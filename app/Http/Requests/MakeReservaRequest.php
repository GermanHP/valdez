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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombreCliente'=>'required|string',
            'apellidoCliente'=>'required|string',
            'DUICliente'=>'required|string',
            'emailCliente'=>'required|string',
            'telefonoCliente'=>'required|string',
            'mensajeOpcional'=>'required|string'
        ];
    }
}
