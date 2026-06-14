<x-layout title="Editar perfil">
<div class="container mt-5" style="max-width: 500px;">

    <div class="card shadow border-0 rounded-4 p-4">
        <h2 class="text-center mb-4">Editar perfil</h2>

        <form action="{{ route('perfil.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombreRegistro" class="form-control"
                       value="{{ old('nombreRegistro', $usuario->nombreRegistro) }}">
                @error('nombreRegistro', 'perfil')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control"
                       value="{{ old('apellido', $usuario->apellido) }}">
                @error('apellido', 'perfil')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Correo electrónico</label>
                <input type="email" name="correo" class="form-control"
                       value="{{ old('correo', $usuario->correo) }}">
                @error('correo', 'perfil')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Teléfono</label>
                <input type="text" name="telefono" class="form-control"
                       value="{{ old('telefono', $usuario->telefono) }}">
                @error('telefono', 'perfil')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <hr>
            <p class="text-muted small">Dejá en blanco si no querés cambiar la contraseña</p>

            <div class="mb-3">
                <label class="form-label">Nueva contraseña</label>
                <input type="password" name="contrasenia" class="form-control">
                @error('contrasenia', 'perfil')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Confirmar nueva contraseña</label>
                <input type="password" name="contrasenia_confirmation" class="form-control">
                @error('contrasenia_confirmation', 'perfil')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-dark w-100 rounded-pill">
                Guardar cambios
            </button>

            <a href="{{ route('perfil.show') }}" class="btn btn-outline-secondary w-100 rounded-pill mt-2">
                Cancelar
            </a>
        </form>
    </div>

</div>
</x-layout>