<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistroRequest;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;   // IMPORTANTE para la contraseña
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function ingresar(Request $request) {
       
    }

    public function registro(Request $request) {
       
    }

    public function login(Request $request) {
         return view('formularioLogin');
    }


    public function procesarLogin(LoginRequest $request)
    {
        $datos = $request->validated();

        $credenciales = [
            'correo' => $datos['email_login'],
            'password' => $datos['contrasenia']
        ];

        if (Auth::attempt($credenciales)) {

            $request->session()->regenerate();

            $usuario = Auth::user();

            if ($usuario->perfil_id == 2) {
                return redirect()->route('admin');

            } elseif ($usuario->perfil_id == 1) {
                return redirect()->route('principal');
            }

            return redirect('/');
        }

        return redirect()->back()
            ->withErrors([
                'login_error' => 'Correo o contraseña incorrectos'
            ]);
    }
   public function procesarRegistro(RegistroRequest $request)
    {
        $datos = $request->validated();

            $nombreRegistro=  $datos['nombreRegistro'];
            $apellido=  $datos['apellido'];
            $correo= $datos['correo'];
            $telefono= $datos['telefono'];
            $contrasenia= Hash::make($datos['contrasenia']);
            $password_confirmation= $datos['password_confirmation'];

            //Guardar en BD
           Usuario::create([
            'nombreRegistro' => $nombreRegistro,
            'apellido' => $apellido,
            'correo' => $correo,
            'telefono' => $telefono,
            'contrasenia' => $contrasenia,

             'perfil_id' => 1, // cliente
             'estado' =>1
        ]);

        return redirect()->back()
        ->with('registro_success', '¡Cuenta creada con éxito!')
        ->with('nombreRegistro', $datos['nombreRegistro']);
 }
}
