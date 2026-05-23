<x-layout title="Productos">

<div class="paginaProductos">
    <div class="container mt-4 mb-4">

        <h2 class="text-center mb-4">Productos</h2>

        <!-- FILTROS -->
        <div class="text-center mb-4">

            <a href="{{ url('/productos') }}" class="btn btn-custom">
                Todos
            </a>

            @foreach($categorias as $categoria)

                <a href="{{ url('/productos/categoria/'.$categoria->id) }}"
                   class="btn btn-custom">

                    {{ $categoria->nombre }}

                </a>

            @endforeach

        </div>

        <!-- CARRUSEL -->
        <div id="carouselProductos"
             class="carousel slide"
             data-bs-ride="carousel">

            <div class="carousel-inner">

                @foreach($productos->chunk(3) as $index => $grupo)

                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">

                        <div class="row justify-content-center mt-4 mb-4">

                            @foreach($grupo as $producto)

                                <div class="col-md-3">

                                    <div class="card h-100">

                                        <img src="{{ asset('storage/'.$producto->imagen) }}"
                                             class="card-img-top"
                                             alt="{{ $producto->nombre }}">

                                        <div class="card-body text-center">

                                            <h6>{{ $producto->nombre }}</h6>

                                            <p>${{ $producto->precio }}</p>

                                            <small>
                                                {{ $producto->categoria->nombre }}
                                            </small>

                                        </div>

                                    </div>

                                </div>

                            @endforeach

                        </div>

                    </div>

                @endforeach

            </div>

            <!-- CONTROLES -->

            <button class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselProductos"
                    data-bs-slide="prev">

                <span class="carousel-control-prev-icon"></span>

            </button>

            <button class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselProductos"
                    data-bs-slide="next">

                <span class="carousel-control-next-icon"></span>

            </button>

        </div>

    </div>
</div>

</x-layout>