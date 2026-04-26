<x-layout title="Comercialización">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<div class="pagina-contacto">

    <!-- BANNER -->
    <div class="banner text-center">
        <img src="{{ asset('Imagenes/comercializacion.png') }}" class="img-fluid" alt="banner">
    </div>

    <div class="container mt-5 texto">

        <!-- TITULO -->
        <h2 class="text-center mb-3">Comercialización</h2>
        <p class="text-center text-muted mb-5">
            Conocé nuestras opciones de envío, pago y condiciones para comprar fácil y seguro 🐾
        </p>

        <!-- SECCIÓN IMAGEN -->
        <section class="mb-5">
            <div class="row align-items-center">
                
                <div class="col-md-6">
                    <img src="{{ asset('imagenes/envios.jpg') }}" class="img-fluid rounded shadow" alt="">
                </div>

                <div class="col-md-6 text-center text-md-start">
                    <h3 class="fw-bold">Comprá sin moverte de tu casa</h3>
                    <p class="text-muted">
                        Encontrá todo para tu mascota con envíos rápidos y múltiples medios de pago.
                    </p>
                    <a href="#" class="btn btn-primary">Ver productos</a>
                </div>

            </div>
        </section>

        <!-- CARDS -->
        <div class="row g-4">

        <div class="row g-4">

    <!-- ENVÍOS -->
    <div class="col-md-6 col-lg-4 d-flex">
        <div class="card custom-card h-100 text-center w-100">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <i class="bi bi-truck fs-1 text-primary mb-3"></i>
                    <h4 class="mb-3">Envíos</h4>
                    <p class="text-muted">
                        Realizamos envíos a domicilio en 24 a 48 hs dentro de la zona.
                        También hacemos envíos a todo el país.
                    </p>
                </div>
                <p class="fw-bold mt-auto">Envío gratis en compras superiores a $80.000</p>
            </div>
        </div>
    </div>

    <!-- PAGOS -->
    <div class="col-md-6 col-lg-4 d-flex">
        <div class="card custom-card h-100 text-center w-100">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <i class="bi bi-credit-card fs-1 text-success mb-3"></i>
                    <h4 class="mb-3">Medios de Pago</h4>
                    <p class="text-muted">
                        Aceptamos efectivo, tarjetas de crédito y débito, transferencias
                        y pagos a través de Mercado Pago.
                    </p>
                </div>
                <p class="fw-bold mt-auto">Pagos 100% seguros</p>
            </div>
        </div>
    </div>

    <!-- CAMBIOS -->
    <div class="col-md-6 col-lg-4 d-flex">
        <div class="card custom-card h-100 text-center w-100">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <i class="bi bi-arrow-repeat fs-1 text-warning mb-3"></i>
                    <h4 class="mb-3">Cambios y Devoluciones</h4>
                    <p class="text-muted">
                        Podés solicitar cambios dentro de los 7 días posteriores a la compra.
                    </p>
                </div>
                <p class="fw-bold mt-auto">Producto en perfecto estado</p>
            </div>
        </div>
    </div>

    <!-- COMO COMPRAR -->
   <!-- CÓMO COMPRAR -->
<div class="col-md-6 col-lg-4 d-flex">
    <div class="card custom-card h-100 text-center w-100">
        <div class="card-body d-flex flex-column justify-content-center">
            
            <i class="bi bi-cart fs-1 mb-3 text-dark"></i>
            <h4 class="mb-3">¿Cómo comprar?</h4>

            <div class="text-muted text-start mx-auto">
                <p>✔ Elegí tu producto</p>
                <p>✔ Agregalo al carrito</p>
                <p>✔ Completá tus datos</p>
                <p>✔ Seleccioná envío y pago</p>
                <p>✔ Confirmá tu compra</p>
            </div>

        </div>
    </div>
</div>

<!-- ATENCIÓN -->
<div class="col-md-6 col-lg-4 d-flex">
    <div class="card custom-card h-100 text-center w-100">
        <div class="card-body d-flex flex-column justify-content-center">

            <i class="bi bi-headset fs-1 mb-3 text-danger"></i>
            <h4 class="mb-3">Atención al Cliente</h4>

            <p class="text-muted">
                Estamos para ayudarte en todo momento.
                Podés contactarnos por WhatsApp o email.
            </p>

            <p class="fw-bold mt-auto">
                Lunes a Sábado de 9 a 18 hs
            </p>

        </div>
    </div>
</div>

<!-- OPCIONES DE ENVÍO -->
<div class="col-md-6 col-lg-4 d-flex">
    <div class="card custom-card h-100 text-center w-100">
        <div class="card-body d-flex flex-column">

            <i class="bi bi-truck fs-1 mb-3 text-secondary"></i>
            <h4 class="mb-3">Opciones de Envío</h4>

            <ul class="list-unstyled text-muted text-start mx-auto mt-3">
                <li><i class="bi bi-lightning-charge me-2"></i>Express: 24 hs</li>
                <li><i class="bi bi-box-seam me-2"></i>Estándar: 2 a 4 días</li>
                <li><i class="bi bi-shop me-2"></i>Retiro en sucursal</li>
            </ul>

        </div>
    </div>
</div>

        <!-- ICONOS -->
        <div class="text-center mt-5">
            <p class="text-muted d-flex justify-content-center gap-4 flex-wrap">

                <span><i class="bi bi-shield-lock me-1"></i>Compra segura</span>
                <span><i class="bi bi-truck me-1"></i>Envíos rápidos</span>
                <span><i class="bi bi-credit-card me-1"></i>Pagos protegidos</span>

            </p>
        </div>

    </div>
</div>

</x-layout>