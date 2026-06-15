<x-layout title="Home">
<div class="pagina-contacto">
  
    <!--Carusel -->
    <div class="container-fluid mb-3" > 
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src ="{{ asset('Imagenes/1.jpeg') }}" class="d-block w-100"  alt="..." >
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src ="{{ asset('Imagenes/2.jpeg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src ="{{ asset('Imagenes/3.jpeg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src ="{{ asset('Imagenes/4.jpeg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src ="{{ asset('Imagenes/5.jpeg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- CATEGORIAS -->
    <div class="container" >
      <h2 class="text-center mb-4">Productos</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center text-center">
        <div class= "col">
          <div class="category-card p-3 mx-auto">
            <img src="{{ asset('Imagenes/categ-alimento.jpg') }}" >
           <a href="{{ route('productos.productosPorCategoria', 1) }}" class="btn btn-custom">ALIMENTOS</a>
           <!-- <p class="category-count">6 items</p> -->
          </div>
        </div>

        <div class= "col">
          <div class="category-card p-3 mx-auto">
            <img src="{{ asset('Imagenes/categ-accesorios.jpg') }}" >
             <a href="{{ route('productos.productosPorCategoria', 3) }}" class="btn btn-custom">ACCESORIOS</a>
            <!-- <p class="category-count">6 items</p> -->
          </div>
        </div>

        <div class= "col">
          <div class="category-card p-3 mx-auto">
            <img src="{{ asset('Imagenes/categ-ropa.jpg') }}" >
             <a href="{{route('productos.productosPorCategoria', 2) }}" class="btn btn-custom">ROPA</a>
            
            <!-- <p class="category-count">6 items</p> -->
          </div> 
        </div>
      </div>
    </div>

    <!--Novedades-->
        <section class="container my-5">

        <h2 class="text-center mb-4">
            Productos Más Vendidos
        </h2>

        <div id="carouselMasVendidos"
            class="carousel slide"
            data-bs-ride="carousel">

            <div class="carousel-inner">

                @foreach($productosMasVendidos->chunk(3) as $grupo)

                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                        <div class="row justify-content-center">

                            @foreach($grupo as $producto)

                                <div class="col-md-4">

                                    <div class="text-center">

                                        @if($producto->producto->imagen_producto)

                                        
                                            <img  src="{{ asset('storage/' .$producto->producto->imagen_producto) }}"
                                                class="img-fluid rounded"
                                                style="width:250px;height:250px;object-fit:cover;">

                                        @endif

                                        <h5 class="mt-3">
                                            {{ $producto->producto->nombre_producto }}
                                        </h5>

                                        <p class="fw-bold">
                                            $ {{ number_format($producto->producto->precio_producto,0,',','.') }}
                                        </p>

                                    </div>

                                </div>

                            @endforeach

                        </div>

                    </div>

                @endforeach

            </div>

            <button class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselMasVendidos"
                    data-bs-slide="prev">

                <span class="carousel-control-prev-icon"></span>

            </button>

            <button class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselMasVendidos"
                    data-bs-slide="next">

                <span class="carousel-control-next-icon"></span>

            </button>

        </div>

    </section>

    <!--Preguntas Frecuentes-->

    <section class="container my-5">

    <h2 class="text-center mb-4">Preguntas Frecuentes</h2>

    <div class="accordion" id="faqAccordion">

        <!-- Pregunta 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header">

                <button class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq1">

                    ¿Realizan envíos?
                </button>

            </h2>

            <div id="faq1"
                 class="accordion-collapse collapse show"
                 data-bs-parent="#faqAccordion">

                <div class="accordion-body">
                    Sí, contamos con envíos dentro de Corrientes y zonas cercanas.
                    Además ofrecemos envío gratis en compras superiores a $50.000.
                </div>

            </div>
        </div>


        <!-- Pregunta 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header">

                <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq2">

                    ¿Qué medios de pago aceptan?
                </button>

            </h2>

            <div id="faq2"
                 class="accordion-collapse collapse"
                 data-bs-parent="#faqAccordion">

                <div class="accordion-body">
                    Aceptamos efectivo, transferencias y tarjetas de débito y crédito.
                </div>

            </div>
        </div>


        <!-- Pregunta 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header">

                <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq3">

                    ¿Puedo cambiar un producto?
                </button>

            </h2>

            <div id="faq3"
                 class="accordion-collapse collapse"
                 data-bs-parent="#faqAccordion">

                <div class="accordion-body">
                    Sí, podés solicitar cambios por productos con fallas o errores
                    dentro de las 48 horas posteriores a la compra.
                </div>

            </div>
        </div>

    </div>

</section>
</div>

    @if(session('mensaje'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'success',
                    title: '¡Compra realizada!',
                    text: "{{ session('mensaje') }}",
                    confirmButtonText: 'Aceptar',
                    confirmButtonColor: '#198754',
                    timer: 4000,
                    timerProgressBar: true,
                });
            });
        </script>
    @endif

</x-layout>