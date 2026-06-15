<x-layout-admin title="Listado de Productos">
   <div class="admin-page">

    
    <section class="bg-dark text-white py-5 mb-5">
        <div class="container text-center">

            <h1 class="fw-bold display-5">
                Listado de Productos
            </h1>

            <p class="lead">
                Consulta de productos activos e inactivos
            </p>

        </div>
    </section>

    <div class="container mb-5">

                    {{-- RESUMEN --}}
            <div class="row mb-4">

                <div class="col-md-3 mb-3">

                    <div class="card shadow-sm border-0 text-center">

                        <div class="card-body">

                            <i class="bi bi-box-seam fs-1 text-primary"></i>

                            <h3 class="fw-bold mt-2">
                                {{ $totalProductos }}
                            </h3>

                            <p class="text-muted mb-0">
                                Total Productos
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-3">

                    <div class="card shadow-sm border-0 text-center">

                        <div class="card-body">

                            <i class="bi bi-check-circle fs-1 text-success"></i>

                            <h3 class="fw-bold mt-2">
                                {{ $totalActivos }}
                            </h3>

                            <p class="text-muted mb-0">
                                Productos Activos
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-3">

                    <div class="card shadow-sm border-0 text-center">

                        <div class="card-body">

                            <i class="bi bi-x-circle fs-1 text-danger"></i>

                            <h3 class="fw-bold mt-2">
                                {{ $totalInactivos }}
                            </h3>

                            <p class="text-muted mb-0">
                                Deshabilitados
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-3">

                    <div class="card shadow-sm border-0 text-center">

                        <div class="card-body">

                            <i class="bi bi-exclamation-triangle fs-1 text-warning"></i>

                            <h3 class="fw-bold mt-2">
                                {{ $sinStock }}
                            </h3>

                            <p class="text-muted mb-0">
                                Sin Stock
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        {{-- PRODUCTOS ACTIVOS --}}
        <div class="card shadow border-0 mb-5">

            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Productos Activos</h4>
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
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($productosActivos as $producto)

                            <tr>

                                <td>{{ $producto->id }}</td>

                                <td>
                                    @if($producto->imagen_producto)
                                        <img src="{{ asset('storage/'.$producto->imagen_producto) }}"
                                             width="60"
                                             class="rounded">
                                    @else
                                        <span class="text-muted">Sin imagen</span>
                                    @endif
                                </td>

                                <td>{{ $producto->nombre_producto }}</td>

                                <td>
                                    {{ $producto->categoria->nombre_categoria ?? 'Sin categoría' }}
                                </td>

                                <td>
                                    $ {{ number_format($producto->precio_producto,0,',','.') }}
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

                            </tr>

                        @empty

                            <tr>
                                <td colspan="6" class="text-center py-4">
                                    No hay productos activos
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

        {{-- PRODUCTOS INACTIVOS --}}
        <div class="card shadow border-0">

            <div class="card-header bg-danger text-white">
                <h4 class="mb-0">Productos Deshabilitados</h4>
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
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($productosInactivos as $producto)

                            <tr class="table-secondary">

                                <td>{{ $producto->id }}</td>

                                <td>
                                    @if($producto->imagen_producto)
                                        <img src="{{ asset('storage/'.$producto->imagen_producto) }}"
                                             width="60"
                                             class="rounded opacity-50">
                                    @else
                                        <span class="text-muted">Sin imagen</span>
                                    @endif
                                </td>

                                <td>{{ $producto->nombre_producto }}</td>

                                <td>
                                    {{ $producto->categoria->nombre_categoria ?? 'Sin categoría' }}
                                </td>

                                <td>
                                    $ {{ number_format($producto->precio_producto,0,',','.') }}
                                </td>

                                <td>
                                    {{ $producto->stock_producto }}
                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="6" class="text-center py-4">
                                    No hay productos deshabilitados
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</x-layout-admin>