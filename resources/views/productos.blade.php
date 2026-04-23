<x-layout title="Productos">
    <div class= "paginaProductos">

        <div class="container mt-4">

        <h2 class="text-center mb-4">Productos</h2>

        <!-- FILTROS -->
        <div class="text-center mb-4">
            <button class="btn btn-custom">Todos</button>
            <button class="btn btn-custom">Alimento</button>
            <button class="btn btn-custom">Accesorios</button>
            <button class="btn btn-custom">Ropa</button>
        </div>

        <!-- PRODUCTOS -->
        <div id="carouselProductos" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">

            <!-- SLIDE 1 -->
            <div class="carousel-item active">
            <div class="row justify-content-center">

                <div class="col-md-3">
                <div class="card">
                    <img src="img/alimento.jpg" class="card-img-top">
                    <div class="card-body text-center">
                    <h6>Alimento</h6>
                    <p>$5000</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3">
                <div class="card">
                    <img src="img/collar.jpg" class="card-img-top">
                    <div class="card-body text-center">
                    <h6>Collar</h6>
                    <p>$2000</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3">
                <div class="card">
                    <img src="img/ropa.jpg" class="card-img-top">
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
                    <img src="img/juguete.jpg" class="card-img-top">
                    <div class="card-body text-center">
                    <h6>Juguete</h6>
                    <p>$1800</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3">
                <div class="card">
                    <img src="img/cama.jpg" class="card-img-top">
                    <div class="card-body text-center">
                    <h6>Cama</h6>
                    <p>$8000</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3">
                <div class="card">
                    <img src="img/arnes.jpg" class="card-img-top">
                    <div class="card-body text-center">
                    <h6>Arnés</h6>
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