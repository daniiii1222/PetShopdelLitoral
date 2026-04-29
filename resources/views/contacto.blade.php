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
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.1055964934553!2d-58.785145524614485!3d-27.465971716547347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456ae1f9f545a7%3A0x4480e6b34abd15ce!2sCampus%20Unne!5e0!3m2!1ses!2sar!4v1777469876264!5m2!1ses!2sar"
                            
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
                

            </div>
        </section>
            <!--script para el modal-->
            @if(session('success'))

            <script>
            document.addEventListener('DOMContentLoaded', function(){

                Swal.fire({
                    title: 'Mensaje enviado',
                    html: 'Hola <strong>{{ session("nombre") }}</strong>, qué bueno recibir tu mensaje.<br><br>Nos contactaremos al correo: <strong>{{ session("email") }}</strong><br><br>¡Muchas gracias!',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                });

            });
            </script>

            @endif

    </div>
</x-layout>