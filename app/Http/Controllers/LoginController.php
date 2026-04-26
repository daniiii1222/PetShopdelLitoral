<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function ingresar(Request $request) {
       
    }

    public function registro(Request $request) {
       
    }

    public function login(Request $request) {
         return view('formularioLogin');
    }


    public function procesarLogin(Request $request) {
         $datos = $request->all();

            // Guardar en BD

            return redirect()->back()
            ->with('success', 'Usuario logueado');
           
    }

   public function procesarRegistro(Request $request) {
         $datos = $request->all();

            // Guardar en BD

            return redirect()->back()
            ->with('success', 'Usuario registrado');
           
    }

    
}