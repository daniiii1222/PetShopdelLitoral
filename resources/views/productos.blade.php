<x-layout :title="isset($categoria) ? $categoria->nombre_categoria : 'Productos'">

<div class="paginaProductos">
     <!-- BUSCADOR -->
        <form action="{{ route('productos.buscar') }}" method="GET" class="d-flex justify-content-center align-items-center m-3">
             <input
                class="form-control w-25"
                type="search"
                name="buscar"
                placeholder="Buscar productos..."
                value="{{ request('buscar') }}">

            <button class="btn btn-primary ms-1" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </form>

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

        @if(session('alerta_login'))
            <div class="alert alert-warning text-center">
                {{ session('alerta_login') }}
                <a href="{{ route('login') }}" class="alert-link ms-2">Iniciar sesión</a>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        @endif

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
                                            <h6>{{ $producto->nombre_producto }}</h6>

                                            <p class="fw-bold">
                                                ${{ $producto->precio_producto }}
                                            </p>

                                            @if($producto->stock_producto > 0)
                                                <form action="{{ route('carrito.store') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                                                    <input type="hidden" name="cantidad" value="1">

                                                    <button type="button"
                                                            class="btn btn-success w-100"
                                                            onclick="verificarLogin(this)">
                                                        <i class="bi bi-cart-plus"></i>
                                                        Agregar al carrito
                                                    </button>
                                                </form>

                                            @else
                                                <button class="btn btn-secondary w-100" disabled>
                                                    <i class="bi bi-x-circle"></i>
                                                    Sin stock
                                                </button>
                                            @endif

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

<script>
function verificarLogin(btn) {
    @if(Auth::check())
        btn.closest('form').submit();
    @else
        Swal.fire({
            title: '¡Iniciá sesión!',
            text: 'Necesitás una cuenta para agregar productos al carrito.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Iniciar sesión',
            cancelButtonText: 'Cancelar',
            confirmButtonColor: '#212529',
        }).then((result) => {
            if (result.isConfirmed) {
               window.location.href = "{{ route('login') }}?mostrar=login";
            }
        });
    @endif
}
</script>

</x-layout>