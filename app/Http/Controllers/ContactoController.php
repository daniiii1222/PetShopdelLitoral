<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function procesar(Request $request) {
        $nombre = $request->input('nombre'); 
        $email = $request->input('email'); 
        $asunto = $request->input('asunto'); 
        $mensaje = $request->input('mensaje'); 
        return view('exito',[
            'nombre' => $nombre, 
            'email' => $email,
            'asunto' => $asunto,
            'mensaje' => $mensaje
        ]); 
    }
}
