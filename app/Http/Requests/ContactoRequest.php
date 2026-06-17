<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [

            'nombre' => 'required|string|regex:/^[\pL\s]+$/u|max:100',
            'email'=> 'required|email|max:150',
            'asunto'=> 'required|string|max:200',
            'mensaje'=> 'required|string|min:30|max:1000',
            
        
        ];

    }

    public function messages(): array
    {
        return[

            'nombre.required'=> 'El nombre es obligatorio', 
            'nombre.regex' => 'El nombre solo puede contener letras',
            'email.required'=> 'El email es obligatorio',
            'asunto.required'=> 'El asunto es obligatorio',
            'mensaje.required'=> 'La consulta es obligatoria',
            'mensaje.min' => 'La consulta debe contener al menos 30 caracteres',
            'mensaje.max' => 'La consulta no puede exceder los 1000 caracteres',
            
        ];
        

    }
}
