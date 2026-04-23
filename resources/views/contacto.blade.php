<x-layout title="Contacto">
    <div class="pag-contacto">
        <div class="banner">
        <img src ="{{ asset('Imagenes/Contactanos.png') }}" alt="banner">  

        </div>

        <!-- FORMULARIO-->

        <section class="container-fluid my-5">
            <div class="row align-items-start">
                <div class="col-lg-6 col-md-8">

                    <div class="card shadow-sm border-0 rounded-4 ms-lg-5">
                    <div class="card-body p-4 fondo-form">

                    <h2 class="mb-4">Contacto</h2>

                    <form action="{{ url('/contacto') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Tu nombre">
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Correo electrónico</label>
                        <input type="email" name="email" class="form-control" placeholder="ejemplo@mail.com">
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Asunto</label>
                        <input type="text" name="asunto" class="form-control">
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Mensaje</label>
                        <textarea class="form-control" name="mensaje" rows="5"></textarea>
                        </div>

                        <button type="submit" class="boton-form text-white w-100 rounded-pill">
                        Enviar mensaje
                        </button>
                    </form>

                    </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-8">
                        <!-- Título -->
                
            
                <h2 class="mb-8">Encontranos en</h2>

                    <!-- Redes / contacto -->
                    <div class="d-flex flex-column gap-3 mb-4">

                        <!-- WhatsApp -->
                        <a href="https://wa.me/549XXXXXXXXXX" target="_blank" class="d-flex align-items-center text-decoration-none">
                           <img src="{{ asset('Imagenes/whatsapp.png') }}" alt="" class="m-2">
                           <span> 379 4 908987</span>
                        </a>

                        <!-- Instagram -->
                        <a href="#" class="d-flex align-items-center text-decoration-none">
                            <img src="{{ asset('Imagenes/instagram.png') }}" alt="" class="m-2">
                            <span> @petShopDelLitoral</span>
                        </a>
                    </div>
                

                    <!-- Mapa -->
                    <div class="ratio ratio-4x3 w-75 mx-auto">
                        <iframe 
                            src="https://www.google.com/maps?q=Corrientes,Argentina&output=embed"
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
                

            </div>
        </section>

    </div>
</x-layout>