<x-layout title="Terminos">
    <div class="pag-contacto">
        <div class="banner">
        <img src ="{{ asset('Imagenes/Terminos.png') }}" alt="banner">  

    </div>
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body p-4 p-md-5">


                        <p class="text-muted text-center mb-4">
                            Última actualización: {{ date('d/m/Y') }}
                        </p>

                        <!-- Sección -->
                        <h5 class="fw-bold mt-4">1. Uso del sitio</h5>
                        <p class="text-muted">
                            El acceso y uso de este sitio web implica la aceptación de los presentes términos. 
                            El usuario se compromete a utilizar el sitio de manera responsable y conforme a la legislación vigente.
                        </p>

                        <!-- Sección -->
                        <h5 class="fw-bold mt-4">2. Información del usuario</h5>
                        <p class="text-muted">
                            Los datos proporcionados a través de formularios serán utilizados únicamente con fines de contacto 
                            y no serán compartidos con terceros sin consentimiento.
                        </p>

                        <!-- Sección -->
                        <h5 class="fw-bold mt-4">3. Propiedad intelectual</h5>
                        <p class="text-muted">
                            Todo el contenido del sitio (textos, imágenes, diseño) es propiedad del mismo 
                            y no puede ser reproducido sin autorización previa.
                        </p>

                        <!-- Sección -->
                        <h5 class="fw-bold mt-4">4. Responsabilidad</h5>
                        <p class="text-muted">
                            No nos hacemos responsables por daños derivados del uso indebido del sitio 
                            o por interrupciones en el servicio.
                        </p>

                        <!-- Sección -->
                        <h5 class="fw-bold mt-4">5. Modificaciones</h5>
                        <p class="text-muted">
                            Nos reservamos el derecho de modificar estos términos en cualquier momento, 
                            sin previo aviso.
                        </p>

                        <!-- Sección -->
                        <h5 class="fw-bold mt-4">6. Contacto</h5>
                        <p class="text-muted">
                            Para consultas, podés comunicarte a través de nuestro formulario de contacto.
                        </p>

                    </div>
                </div>

            </div>
        </div>

    </div>

</x-layout>