<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
     public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [

            'required|email|max:150|exists:usuarios,correo',
            'contrasenia'=> 'required|string|max:200',
        
        ];

    }

    public function messages(): array
    {
        return[

            'email_login.required'=> 'El email es obligatorio',
            'email_login.exists' => 'El email no está registrado',
            'email_login.email'=> 'El email no es válido',
            'contrasenia.required'=> 'La contraseña es obligatoria',
        ];
        

    }
}
