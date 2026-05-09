<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function store_contact(ContactoRequest $request)
    {
        $datos = $request->validated();

            $nombre=  $datos['nombre'];
            $email=  $datos['email'];
            $asunto= $datos['asunto'];
            $mensaje= $datos['mensaje'];

            //Guardar en BD
           Contacto::create([
            'nombre' => $nombre,
            'email' => $email,
            'asunto' => $asunto,
            'mensaje' => $mensaje,
        ]);

        return redirect()->back()
            ->with('contacto_success', true)
            ->with('nombre', $datos['nombre']);
    }
}
