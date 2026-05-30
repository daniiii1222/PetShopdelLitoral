<x-layout-admin title="Gestión de Productos">

    {{-- HERO --}}
    <section class="bg-dark text-white py-5 mb-5">
        <div class="container text-center">

            <h1 class="fw-bold display-5">
                Gestión de Productos
            </h1>

            <p class="lead">
                Administración de productos registrados
            </p>

        </div>
    </section>

    <div class="container mb-5">

        {{-- TITULO + BOTON --}}
        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2 class="fw-bold">
                Productos Registrados
            </h2>

            <a href="{{ route('productos.create') }}"
               class="btn btn-success">

                <i class="bi bi-plus-circle"></i>
                Nuevo Producto

            </a>

        </div>

        {{-- MENSAJE --}}
        @if(session('mensaje'))

            <div class="alert alert-success">

                {{ session('mensaje') }}

            </div>

        @endif

        {{-- TABLA --}}
        <div class="card shadow border-0">

            <div class="card-header bg-primary text-white">

                <h4 class="mb-0">
                    Lista de Productos
                </h4>

            </div>

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">

                        <tr>

                            <th>#</th>

                            <th>Imagen</th>

                            <th>Producto</th>

                            <th>Categoría</th>

                            <th>Precio</th>

                            <th>Stock</th>

                            <th>Estado</th>

                            <th class="text-center">
                                Acciones
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($productos as $producto)

                            <tr>

                                <td>
                                    {{ $producto->id }}
                                </td>

                                <td>

                                    @if($producto->imagen_producto)

                                        <img src="{{ asset('storage/'.$producto->imagen_producto) }}"
                                             width="60"
                                             class="rounded">

                                    @else

                                        <span class="text-muted">
                                            Sin imagen
                                        </span>

                                    @endif

                                </td>

                                <td>
                                    {{ $producto->nombre_producto }}
                                </td>

                                <td>
                                    {{ $producto->categoria->nombre_categoria ?? 'Sin categoría' }}
                                </td>

                                <td>
                                    $ {{ number_format($producto->precio_producto, 0, ',', '.') }}
                                </td>

                                <td>

                                    @if($producto->stock_producto > 10)

                                        <span class="badge bg-success">
                                            {{ $producto->stock_producto }}
                                        </span>

                                    @elseif($producto->stock_producto > 0)

                                        <span class="badge bg-warning text-dark">
                                            {{ $producto->stock_producto }}
                                        </span>

                                    @else

                                        <span class="badge bg-danger">
                                            Sin stock
                                        </span>

                                    @endif

                                </td>

                                <td>

                                    @if($producto->activo)

                                        <span class="badge bg-success">
                                            Activo
                                        </span>

                                    @else

                                        <span class="badge bg-danger">
                                            Inactivo
                                        </span>

                                    @endif

                                </td>

                                <td class="text-center">

                                    <div class="d-flex justify-content-center gap-2">

                                        {{-- MODIFICAR --}}
                                        <a href="{{ route('productos.edit', $producto->id) }}"
                                           class="btn btn-warning btn-sm">

                                            <i class="bi bi-pencil-square"></i>

                                            Modificar

                                        </a>

                                        {{-- ELIMINAR --}}
                                        <form action="{{ route('productos.destroy', $producto->id) }}"
                                              method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-danger btn-sm">

                                                <i class="bi bi-trash"></i>

                                                Eliminar

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="7" class="text-center py-4">

                                    No hay productos registrados

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</x-layout-admin>