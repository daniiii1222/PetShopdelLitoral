<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Usuario;
use App\Models\Venta;

class PerfilController extends Controller
{


    public function show()
    {
        $usuario = Auth::user();
        return view('perfil.show', compact('usuario'));
    }

    public function edit()
    {
        $usuario = Auth::user();
        return view('perfil.edit', compact('usuario'));
    }

    public function update(Request $request)
    {
     
        $usuario = Auth::user();

        $validator = Validator::make($request->all(), [
            'nombreRegistro' => 'required|string|max:100',
            'apellido'       => 'required|string|max:100',
            'telefono'       => 'required|string|max:20',
            'correo'         => 'required|email|unique:usuarios,correo,' . $usuario->id,
            'contrasenia'    => 'nullable|string|min:6|confirmed',
        ], [
            'nombreRegistro.required' => 'El nombre es obligatorio',
            'apellido.required' => 'El apellido es obligatorio',
            'telefono.required' => 'El teléfono es obligatorio',
            'correo.required' => 'El correo electrónico es obligatorio',
            'correo.email' => 'El correo electrónico no es válido',
            'correo.unique' => 'El correo ya está en uso',
            'contrasenia.min' => 'La contraseña debe tener al menos 6 caracteres',
            'contrasenia.confirmed' => 'La confirmación de la contraseña no coincide',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator, 'perfil')
                ->withInput();
        }

        $usuario->nombreRegistro = $request->nombreRegistro;
        $usuario->apellido       = $request->apellido;
        $usuario->telefono       = $request->telefono;
        $usuario->correo         = $request->correo;

        if ($request->filled('contrasenia')) {
            $usuario->contrasenia = Hash::make($request->contrasenia);
        }

        $usuario->save();

        return redirect()->route('perfil.show')
            ->with('success', 'Perfil actualizado correctamente');
    }

    public function misCompras()
    {
        $compras = Venta::where('usuario_id', Auth::id())
                        ->where('estado', 'completada')
                        ->with('detalles.producto')
                        ->orderBy('created_at', 'desc')
                        ->get();

        return view('perfil.misCompras', compact('compras'));
    }
}