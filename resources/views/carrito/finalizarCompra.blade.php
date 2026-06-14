<x-layout>

    <x-slot name="title">
        Finalizar Compra
    </x-slot>

    <div class="container py-5">

        <h2 class="mb-4">
            Datos de Envío
        </h2>

        <form action="{{ route('carrito.confirmar') }}" method="POST" novalidate>

            @csrf

            <div class="mb-3">

                <label class="form-label">
                    Dirección
                </label>

                <input type="text"
                       name="direccion"
                       class="form-control"
                       value="{{ old('direccion') }}">
                     @error('direccion')
                            <small class = "text-danger">
                                {{$message}}
                            </small>
                        @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Ciudad
                </label>

                <input type="text"
                       name="ciudad"
                       class="form-control"
                       value="{{ old('ciudad') }}">
                       @error('ciudad')
                            <small class = "text-danger">
                                {{$message}}
                            </small>
                        @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Provincia
                </label>

                <input type="text"
                       name="provincia"
                       class="form-control"
                       value="{{ old('provincia') }}">
                       @error('provincia')
                            <small class = "text-danger">
                                {{$message}}
                            </small>
                        @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Código Postal
                </label>

                <input type="text"
                       name="codigo_postal"
                       class="form-control"
                       value="{{ old('codigo_postal') }}">
                       @error('codigo_postal')
                            <small class = "text-danger">
                                {{$message}}
                            </small>
                        @enderror
            </div>

            <button type="submit"
                    class="btn btn-success">

                Confirmar Compra

            </button>

        </form>

    </div>

</x-layout>