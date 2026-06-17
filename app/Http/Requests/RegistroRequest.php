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
            'telefono' => 'required|string|max:10',
            'contrasenia' => 'required|string|max:150', 
            'password_confirmation' => 'required|string|same:contrasenia', 
        ];

    }

    public function messages(): array
{
    return [
        'nombreRegistro.required' => 'El nombre es obligatorio',
        'apellido.required' => 'El apellido es obligatorio',
        'correo.required'         => 'El email es obligatorio',
        'correo.unique'           => 'Este correo ya está registrado',
        'correo.email'            => 'El email no es válido',
        'telefono.max' => 'El teléfono no puede exceder los 10 caracteres',
        'telefono.required'       => 'El teléfono es obligatorio',

        'contrasenia.required'     => 'La contraseña es obligatoria',
        'contrasenia.min'          => 'La contraseña debe tener al menos 6 caracteres', 
        'password_confirmation.required' => 'Debes confirmar la contraseña',
        'password_confirmation.same'     => 'Las contraseñas no coinciden',
    ];
}
}
