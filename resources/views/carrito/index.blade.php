<x-layout>
    <x-slot name="title">Mi Carrito</x-slot>

    <div class="container py-5">
        <h2 class="mb-4">🛒 Mi Carrito</h2>

        @if(session('mensaje'))
            <div class="alert alert-success">{{ session('mensaje') }}</div>
        @endif

        @if($items->count() > 0)

            @foreach($items as $item)
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title">{{ $item->producto->nombre_producto }}</h6>
                        <p class="mb-1">Cantidad: <strong>{{ $item->cantidad }}</strong></p>
                        <p class="mb-1">Precio unitario: ${{ number_format($item->precio_unitario, 2, ',', '.') }}</p>
                        <p class="fw-bold text-success">Subtotal: ${{ number_format($item->subtotal, 2, ',', '.') }}</p>

                        <form action="{{ route('carrito.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                </div>
            @endforeach

            <hr>

            <div class="d-flex justify-content-between mb-3">
                <h5>Total:</h5>
                <h5 class="text-success">${{ number_format($carrito->total ?? 0, 2, ',', '.') }}</h5>
            </div>

            <a href="{{ route('carrito.finalizarCompra') }}"
                class="btn btn-success w-100">
                    Finalizar Compra
            </a>

            <p class="mt-2 text-danger">
    {{ route('carrito.finalizarCompra') }}
</p>
        @else
            <p class="text-muted">Tu carrito está vacío.</p>
        @endif
    </div>
</x-layout>