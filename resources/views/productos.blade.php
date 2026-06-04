<x-layout :title="isset($categoria) ? $categoria->nombre_categoria : 'Productos'">

<div class="paginaProductos">
    <div class="container mt-4 mb-4">

        <h2 class="text-center mb-4">
            {{ isset($categoria) ? $categoria->nombre_categoria : 'Productos' }}
        </h2>

        <!-- FILTROS DE CATEGORÍA -->
        <div class="text-center mb-4">
            <a href="{{ route('productos.index') }}" class="btn btn-custom">Todos</a>

            @foreach($categorias as $cat)
                <a href="{{ route('productos.productosPorCategoria', $cat->id) }}" class="btn btn-custom">
                    {{ $cat->nombre_categoria }}
                </a>
            @endforeach
        </div>

        {{-- SUBCATEGORIAS DE ALIMENTOS --}}
        @isset($categoria)
            @if($categoria->id == 1 && $tiposAlimentos->isNotEmpty())
                <div class="d-flex justify-content-center gap-3 mb-4">
                    @foreach($tiposAlimentos as $tipo)
                        <a href="{{ route('productos.productosPorCategoria', [
                                'id' => $categoria->id,
                                'tipo' => $tipo->id
                            ]) }}"
                            class="btn {{ request('tipo') == $tipo->id ? 'btn-dark' : 'btn-outline-dark' }}">
                            {{ $tipo->nombreAnimal }}
                        </a>
                    @endforeach
                </div>
            @endif
        @endisset

        <!-- CARRUSEL -->
        <div id="carouselProductos" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                @foreach($productos->chunk(3) as $index => $grupo)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="row justify-content-center mt-4 mb-4">

                            @foreach($grupo as $producto)
                                <div class="col-md-3">
                                    <div class="card h-100">
                                        <img src="{{ asset('storage/' . $producto->imagen_producto) }}"
                                             class="card-img-top"
                                             alt="{{ $producto->nombre_producto }}">
                                        <div class="card-body text-center">
                                            <h6>
                                                {{ $producto->nombre_producto }}
                                            </h6>

                                            <p class="fw-bold">
                                                ${{ $producto->precio_producto }}
                                            </p>

                                            <form action="{{ route('carrito.store') }}"
                                                method="POST">

                                                @csrf

                                               
                                                <input type="hidden"
                                                    name="producto_id"
                                                    value="{{ $producto->id }}">

                                                <input type="hidden"
                                                    name="cantidad"
                                                    value="1">

                                                
                                                <button type="submit"
                                                        class="btn btn-success w-100">

                                                    <i class="bi bi-cart-plus"></i>

                                                    Agregar al carrito

                                                </button>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                @endforeach

            </div>

            <button class="carousel-control-prev" type="button"
                    data-bs-target="#carouselProductos" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button"
                    data-bs-target="#carouselProductos" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

    </div>
</div>

</x-layout>