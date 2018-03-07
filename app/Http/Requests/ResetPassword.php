<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPassword extends FormRequest
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
    //se colocan las reglas a seguir para el ingreso de datos desde el formulario
    public function rules()
    {
        return [
            'password'=>'required|string|min:6',
            'password_confirmation'=>'required|min:6',
        ];
    }
}
