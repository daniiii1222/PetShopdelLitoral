<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

        $request->validate([
            'nombreRegistro' => 'required|string|max:100',
            'apellido'       => 'required|string|max:100',
            'telefono'       => 'required|string|max:20',
            'correo'         => 'required|email|unique:usuarios,correo,' . $usuario->id,
            'contrasenia'    => 'nullable|min:6|confirmed',
        ]);

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