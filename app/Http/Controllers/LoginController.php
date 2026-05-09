<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;



class LoginController extends Controller
{
    public function ingresar(Request $request) {
       
    }

    public function registro(Request $request) {
       
    }

    public function login(Request $request) {
         return view('formularioLogin');
    }


    public function procesarLogin(LoginRequest $request) {
          $datos = $request->validated();
        
        $email = $datos['email_login'];
        $password = $datos['password'];

    

            // Guardar en BD

            return redirect()->back()
            ->with('login_success', 'Usuario logueado');
           
    }

   public function procesarRegistro(Request $request) {
         $datos = $request->all();

            // Guardar en BD

            return redirect()->back()
            ->with('registro_success', 'Usuario registrado');
           
    }

}