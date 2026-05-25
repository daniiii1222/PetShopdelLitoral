<x-layout :title="$categoria->nombre_categoria">

    <div class="paginaProductos">
        <div class="container mt-4 mb-4">

            <h2 class="text-center mb-4">{{ $categoria->nombre_categoria }}</h2>

            {{-- SUBCATEGORIAS DE ALIMENTOS --}}
            @if($categoria->id == 1)

                <div class="d-flex justify-content-center gap-3 mb-4">

                    @foreach($tiposAlimentos as $tipo)

                        <a href="{{ route('productos.categoria', [
                                'id' => $categoria->id,
                                'tipo' => $tipo->id
                            ]) }}"

                        class="btn
                        {{ request('tipo') == $tipo->id
                                ? 'btn-dark'
                                : 'btn-outline-dark' }}">

                            {{ $tipo->nombreAnimal }}

                        </a>

                    @endforeach

                </div>

            @endif

            <div class="row justify-content-center mt-4">

                @forelse($productos as $producto)

                    <div class="col-md-2 mb-4">
                        <div class="card h-100 d-flex flex-column">

                            <img src="{{ asset('storage/' . $producto->imagen_producto) }}"
                                 class="card-img-top"
                                 alt="{{ $producto->nombre_producto }}">

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">
                                    {{ $producto->nombre_producto }}
                                </h5>
                                <p class="text-success text-center">
                                    ${{ $producto->precio_producto }}
                                </p>
                                <div class="mt-auto text-center">
                                    <button class="btn btn-dark">Comprar</button>
                                </div>
                            </div>

                        </div>
                    </div>

                @empty
                    <p class="text-center text-muted">
                        No hay productos disponibles en esta categoría.
                    </p>
                @endforelse

            </div>

        </div>
    </div>

</x-layout>