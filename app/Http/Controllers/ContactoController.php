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
         return redirect()->back()
            ->with('success', true)
            ->with('nombre', $request->nombre)
            ->with('email', $request->email);
    }

    
}
