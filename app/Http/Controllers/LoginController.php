<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistroRequest;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
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

            // ADMIN
           if ($usuario->perfil_id == 2) {
                return redirect()->route('admin.dashboard');
            }

            // CLIENTE
            return redirect()->route('principal');
        }

        return redirect()->back()
            ->withErrors([
                'login_error' => 'Correo o contraseña incorrectos'
            ]);
    }

    public function procesarRegistro(RegistroRequest $request)
    {
        $datos = $request->validated();

        Usuario::create([
            'nombreRegistro' => $datos['nombreRegistro'],
            'apellido' => $datos['apellido'],
            'correo' => $datos['correo'],
            'telefono' => $datos['telefono'],
            'contrasenia' => Hash::make($datos['contrasenia']),
            'perfil_id' => 2,
            'estado' => 1
        ]);

        return redirect()->back()
            ->with('registro_success', '¡Cuenta creada con éxito!')
            ->with('nombreRegistro', $datos['nombreRegistro']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}