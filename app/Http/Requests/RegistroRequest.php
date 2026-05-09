<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
{
     public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'nombreRegistro' => 'required|string|max:150',
            'apellido' => 'required|string|max:150',
            'correo'=> 'required|email|max:150',
            'telefono' => 'required|integer|max:150',
            'contraseña' => 'required|string|max:150',
            'password_confirmation' => 'required|string|max:150',
        ];

    }

    public function messages(): array
    {
        return[
            'nombreRegistro.required'=> 'El nombre es obligatorio',
            'apellido.required'=> 'El apellido es obligatorio',
            'correo.required'=> 'El email es obligatorio',
            'correo.email'=> 'El email no es válido',
            'telefono.required'=> 'El telefono es obligatorio',
            'contraseña.required'=> 'La contraseña es obligatoria',
            'password_confirmation' => 'La contraseña es obligatoria'

        ];
        

    }
}
