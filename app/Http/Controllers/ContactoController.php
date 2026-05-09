<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest;

class ContactoController extends Controller
{
    public function store_contact(ContactoRequest $request)
    {
        $datos = $request->validated();

        return redirect()->back()
            ->with('contacto_success', true)
            ->with('nombre', $datos['nombre'])
            ->with('email', $datos['email']);
    }
}
