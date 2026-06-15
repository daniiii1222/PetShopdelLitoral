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
        return view('vistaLogin');
    }

    public function procesarLogin(LoginRequest $request)
    {
        $datos = $request->validated();

        $usuario = Usuario::where('correo', $datos['email_login'])->first();

        if ($usuario && Hash::check($datos['contrasenia'], $usuario->contrasenia)) {

            Auth::login($usuario);

            $request->session()->regenerate();

            // Definimos la ruta de destino según el perfil
            $rutaDestino = ($usuario->perfil_id == 2) ? route('dashboard') : route('principal');

            // Si la petición viene por AJAX (fetch), devolvemos JSON con la ruta
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'redirect' => $rutaDestino
                ]);
            }

            // Comportamiento tradicional por si el JS falla
            return redirect($rutaDestino);
        }

        // --- SI FALLA EL LOGIN ---
        
        // Si es petición AJAX, devolvemos un error 422 con el mensaje
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'errors' => [
                    'login_error' => ['Correo o contraseña incorrectos']
                ]
            ], 422);
        }

        // Comportamiento tradicional
        return redirect()->back()
            ->withInput()
            ->withErrors([
                'login_error' => 'Correo o contraseña incorrectos'
            ]);
    }

    public function procesarRegistro(RegistroRequest $request)
    {
        $datos = $request->validated();

        if (Usuario::where('correo', $datos['correo'])->exists()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'errors' => ['correo' => ['Este correo ya está registrado']]
                ], 422);
            }
        }

        Usuario::create([
            'nombreRegistro' => $datos['nombreRegistro'],
            'apellido' => $datos['apellido'],
            'correo' => $datos['correo'],
            'telefono' => $datos['telefono'],
            'contrasenia' => Hash::make($datos['contrasenia']),
            'perfil_id' => 1,
            'estado' => 1
        ]);

        if ($request->ajax() || $request->wantsJson()) {
            session()->flash('registro_success', '¡Cuenta creada con éxito!');
            return response()->json([
                'success' => true,
                'message' => '¡Cuenta creada con éxito!',
                'redirect' => route('principal')
            ]);
        }

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