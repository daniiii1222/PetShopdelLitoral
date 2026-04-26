<x-layout title="Productos">
    <div class= "paginaProductos">

        <div class="container mt-4 mb-4">

        <h2 class="text-center mb-4">Productos</h2>

        <!-- FILTROS -->
        <div class="text-center mb-4">
            <a href="{{ url('/productos') }}" class="btn btn-custom">Todos</a>

            <a href="{{ url('/alimentos') }}" class="btn btn-custom">Alimento</a>

            <a href="{{ url('/accesorios') }}" class="btn btn-custom">Accesorios</a>

            <a href="{{ url('/ropa') }}" class="btn btn-custom">Ropa</a>
        </div>

        <!-- PRODUCTOS -->
        <div  id="carouselProductos" class="carousel slide" data-bs-ride="carousel" >

        <div class="carousel-inner ">

            <!-- SLIDE 1 -->
            <div class="carousel-item active">
            <div class="row justify-content-center mt-4 mb-4">

                <div class="col-md-3">
                <div class="card">
                    <img src ="{{ asset('Imagenes/AlimentoHumedoPerro.png') }}" class="card-img-top">
                    <div class="card-body text-center">
                    <h6>Alimento</h6>
                    <p>$5000</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3">
                <div class="card">
                    <img src ="{{ asset('Imagenes/AccesorioPechera.png') }}" class="card-img-top">
                    <div class="card-body text-center">
                    <h6>Pechera</h6>
                    <p>$2000</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3">
                <div class="card">
                    <img src ="{{ asset('Imagenes/RopaPerro.png') }}" class="card-img-top">
                    <div class="card-body text-center">
                    <h6>Ropa</h6>
                    <p>$3500</p>
                    </div>
                </div>
                </div>

            </div>
            </div>

            <!-- SLIDE 2 -->
            <div class="carousel-item">
            <div class="row justify-content-center">

                <div class="col-md-3">
                <div class="card">
                    <img src ="{{ asset('Imagenes/AccesorioPlatoDeComida.png') }}" class="card-img-top">
                    <div class="card-body text-center">
                    <h6>Plato</h6>
                    <p>$1800</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3">
                <div class="card">
                    <img src ="{{ asset('Imagenes/AlimentoPerroCachorro.png') }}" class="card-img-top">
                    <div class="card-body text-center">
                    <h6>Alimento</h6>
                    <p>$8000</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3">
                <div class="card">
                    <img src ="{{ asset('Imagenes/AccesorioRatrilloGatoAcero.png') }}" class="card-img-top">
                    <div class="card-body text-center">
                    <h6>Rastrillo</h6>
                    <p>$4000</p>
                    </div>
                </div>
                </div>

            </div>
            </div>

        </div>

        <!-- CONTROLES -->
        <button class="carousel-control-prev carouselProductos" type="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next carouselProductos" type="button" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

        </div>

        </div>
        </div>
    </div>
</x-layout>