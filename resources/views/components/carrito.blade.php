
{{-- Offcanvas --}}
<div class="offcanvas offcanvas-end"
     tabindex="-1"
     id="carritoCanvas"
     aria-labelledby="carritoCanvasLabel"
     data-bs-scroll="true"
     style="width: 400px;">

    <div class="offcanvas-header">

        <h5 class="offcanvas-title" id="carritoCanvasLabel">
            🛒 Mi Carrito
        </h5>

        <button type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas"
                aria-label="Cerrar">
        </button>

    </div>

    <div class="offcanvas-body">

        @if(isset($items) && $items->count() > 0)

            @foreach($items as $item)

                <div class="card mb-3 shadow-sm">

                    <div class="card-body">

                        <h6 class="card-title">
                            {{ $item->producto->nombre_producto }}
                        </h6>

                        <p class="mb-1">
                            Cantidad:
                            <strong>{{ $item->cantidad }}</strong>
                        </p>

                        <p class="mb-1">
                            Precio Unitario:
                            ${{ number_format($item->precio_unitario, 2, ',', '.') }}
                        </p>

                        <p class="fw-bold text-success">
                            Subtotal:
                            ${{ number_format($item->subtotal, 2, ',', '.') }}
                        </p>

                        <form action="{{ route('carrito.destroy', $item->id) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-outline-danger btn-sm">
                                Eliminar
                            </button>

                        </form>

                    </div>

                </div>

            @endforeach

            <hr>

            <div class="d-flex justify-content-between mb-3">

                <h5>Total:</h5>

                <h5 class="text-success">
                   
                    ${{ number_format($carrito->total ?? 0, 2, ',', '.') }}
                </h5>

            </div>

            <form action="{{ route('carrito.confirmar') }}"
                  method="POST">

                @csrf

                <div class="d-grid">

                    <button type="submit"
                            class="btn btn-success">

                        Finalizar Compra

                    </button>

                </div>

            </form>

        @else

            

        @endif

    </div>

</div>

