<x-layout title="Mi perfil">
<div class="container mt-5" style="max-width: 500px;">

    <div class="card shadow border-0 rounded-4 p-4">
        <h2 class="text-center mb-4">Mi perfil</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item">
                <strong>Nombre:</strong> {{ $usuario->nombreRegistro }}
            </li>
            <li class="list-group-item">
                <strong>Apellido:</strong> {{ $usuario->apellido }}
            </li>
            <li class="list-group-item">
                <strong>Correo:</strong> {{ $usuario->correo }}
            </li>
            <li class="list-group-item">
                <strong>Teléfono:</strong> {{ $usuario->telefono }}
            </li>
        </ul>

        <a href="{{ route('perfil.edit') }}" class="btn btn-dark w-100 rounded-pill">
            Editar perfil
        </a>

        <a href="{{ route('perfil.misCompras') }}" class="btn btn-outline-dark w-100 rounded-pill mt-2">
            Mis compras
        </a>
    </div>

</div>
</x-layout>