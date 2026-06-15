<x-layout-admin title="Ventas">

    {{-- HERO --}}
    <section class="bg-dark text-white py-5 mb-5">
        <div class="container text-center">

            <h1 class="fw-bold display-5">
                Gestión de Ventas
            </h1>

            <p class="lead">
                Listado general de ventas realizadas
            </p>

        </div>
    </section>

    <div class="container mb-5">

      
        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2 class="fw-bold">
                Ventas Registradas
            </h2>

        </div>
       
        <div class="card shadow border-0">

            <div class="card-header bg-primary text-white">

                <h4 class="mb-0">
                    Lista de ventas
                </h4>

            </div>

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    {{-- CABECERA --}}
                    <thead class="table-light">

                        <tr>

                            <th>#</th>

                            <th>Cliente</th>

                            <th>Total</th>

                            <th>Estado</th>

                            <th>Fecha</th>

                            <th class="text-center">
                                Acciones
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                       
                        @forelse($ventas as $venta)

                            <tr>

                                {{-- ID --}}
                                <td>

                                    {{ $venta->id }}

                                </td>

                                {{-- USUARIO --}}
                                <td>

                                    {{-- nombre del usuario relacionado --}}
                                    {{ $venta->usuario->name }}

                                </td>

                                {{-- TOTAL --}}
                                <td>

                                    $ {{ number_format($venta->total, 0, ',', '.') }}

                                </td>

                                {{-- ESTADO --}}
                                <td>

                                    
                                    @if($venta->estado == 'completada')

                                        <span class="badge bg-success">

                                            Completada

                                        </span>

                                    @elseif($venta->estado == 'pendiente')

                                        <span class="badge bg-warning text-dark">

                                            Pendiente

                                        </span>

                                    @else

                                        <span class="badge bg-danger">

                                            Cancelada

                                        </span>

                                    @endif

                                </td>

                               
                                <td>

                                    {{ $venta->created_at->format('d/m/Y') }}

                                </td>

                              
                                <td class="text-center">

                                    <div class="d-flex justify-content-center gap-2">

                                        {{-- VER --}}
                                        <a href="{{ route('ventas.show', $venta->id) }}"
                                           class="btn btn-primary btn-sm">

                                            <i class="bi bi-eye"></i>

                                            Ver

                                        </a>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="6" class="text-center py-4">

                                    No hay ventas registradas

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</x-layout-admin>