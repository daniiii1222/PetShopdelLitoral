<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistroRequest;
use App\Models\Usuario;


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

   public function procesarRegistro(RegistroRequest $request)
    {
        $datos = $request->validated();

            $nombreRegistro=  $datos['nombreRegistro'];
            $apellido=  $datos['apellido'];
            $correo= $datos['correo'];
            $telefono= $datos['telefono'];
            $contraseña= $datos['contraseña'];
            $password_confirmation= $datos['password_confirmation'];

            //Guardar en BD
           Usuario::create([
            'nombreRegistro' => $nombreRegistro,
            'apellido' => $apellido,
            'correo' => $correo,
            'telefono' => $telefono,
            'contraseña' => $contraseña,
        ]);

        return redirect()->back()
            ->with('registro_success', true)
            ->with('nombreRegistro', $datos['nombreRegistro']);
 }
}
