<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
    //se establecen las reglas de validación que debe de cumplir la data que se ingresará en el formulario
    public function rules()
    {
        return [
            'modeloProducto'=>'required',
            'enlace'=>'required',
            'precioSalvador'=>'required',
            'stockEntrante'=>'required'
        ];
    }
}
