<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class FinalizarCompraRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [

            'direccion' => 'required|string|max:200',
            'ciudad' => 'required|string|max:100',
            'provincia' => 'required|string|max:100',
            'codigo_postal' => 'required|string|max:20',
          
            
        
        ];

    }

    public function messages(): array
    {
        return[

            'direccion.required'=> 'La dirección es obligatoria', 
            'ciudad.required'=> 'La ciudad es obligatoria',
            'provincia.required'=> 'La provincia es obligatoria',
            'codigo_postal.required'=> 'El código postal es obligatorio',
            
        ];
        

    }
}
