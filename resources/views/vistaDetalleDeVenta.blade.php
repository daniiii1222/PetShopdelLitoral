<x-layout title="Detalle de Venta">

    <div class="container py-5">

        <h2 class="mb-4">
            Venta #{{ $venta->id }}
        </h2>

        <div class="card shadow mb-4">

            <div class="card-header bg-primary text-white">
                Información General
            </div>

            <div class="card-body">

                <p>
                    <strong>Cliente:</strong>
                    {{ $venta->usuario->nombreRegistro }} {{ $venta->usuario->apellido }}
                </p>

                <p>
                    <strong>Fecha:</strong>
                    {{ $venta->created_at->format('d/m/Y H:i') }}
                </p>

                <p>
                    <strong>Estado:</strong>
                    {{ ucfirst($venta->estado) }}
                </p>

                <p>
                    <strong>Total:</strong>
                    $ {{ number_format($venta->total, 0, ',', '.') }}
                </p>

            </div>

        </div>

        <div class="card shadow">

            <div class="card-header bg-success text-white">
                Productos Vendidos
            </div>

            <div class="table-responsive">

                <table class="table table-hover mb-0">

                    <thead>

                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario</th>
                            <th>Subtotal</th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach($venta->detalles as $detalle)

                            <tr>

                                <td>
                                    {{ $detalle->producto->nombre_producto }}
                                </td>

                                <td>
                                    {{ $detalle->cantidad }}
                                </td>

                                <td>
                                    $ {{ number_format($detalle->precio_unitario,0,',','.') }}
                                </td>

                                <td>
                                    $ {{ number_format($detalle->subtotal,0,',','.') }}
                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                    <tfoot>

                        <tr>

                            <th colspan="3" class="text-end">
                                Total:
                            </th>

                            <th>
                                $ {{ number_format($venta->total,0,',','.') }}
                            </th>

                        </tr>

                    </tfoot>

                </table>

            </div>

        </div>

    </div>

</x-layout>