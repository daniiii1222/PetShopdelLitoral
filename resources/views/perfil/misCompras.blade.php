<x-layout title="Mis compras">
<div class="container mt-5">

    <h2 class="mb-4">Mis compras</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($compras->isEmpty())
        <div class="alert alert-info">Todavía no realizaste ninguna compra.</div>
    @else
        @foreach($compras as $compra)
            <div class="card shadow-sm border-0 rounded-4 mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>
                        <strong>Compra #{{ $compra->id }}</strong>
                        — {{ $compra->created_at->format('d/m/Y') }}
                    </span>
                    <span class="badge bg-success">{{ ucfirst($compra->estado) }}</span>
                </div>

                <div class="card-body">
                    <table class="table table-borderless mb-0">
                        <thead class="text-muted small">
                            <tr>
                                <th>Producto</th>
                                <th class="text-center">Cantidad</th>
                                <th class="text-end">Precio unitario</th>
                                <th class="text-end">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($compra->detalles as $detalle)
                                <tr>
                                    <td>{{ $detalle->producto->nombre_producto }}</td>
                                    <td class="text-center">{{ $detalle->cantidad }}</td>
                                    <td class="text-end">${{ number_format($detalle->precio_unitario, 2) }}</td>
                                    <td class="text-end">${{ number_format($detalle->subtotal, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-end fw-bold">Total:</td>
                                <td class="text-end fw-bold">${{ number_format($compra->total, 2) }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        @endforeach
    @endif

    <a href="{{ route('perfil.show') }}" class="btn btn-outline-secondary rounded-pill">
        Volver al perfil
    </a>

    
</div>
</x-layout>