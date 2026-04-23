<x-layout title="Contacto">
    <div class="pag-contacto">
        <div class="banner">
        <img src ="{{ asset('Imagenes/quienesSomos.png') }}" alt="banner">  

        </div>

<!-- Nuestra historia -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-md-6">
                <img 
                  src="{{ asset('Imagenes/historia.jpg') }}" 
                  class="img-fluid rounded shadow"
                  alt="Nuestra historia">
            </div>

            <div class="col-md-6">
                <h2 class="fw-bold mb-4">Nuestra Historia</h2>

                <p>
                Petshop del Litoral surge como una propuesta orientada al cuidado y bienestar de las mascotas, con la idea de brindar productos de calidad y atención personalizada para cada cliente. Desde sus inicios, el proyecto fue pensado como un espacio donde las familias puedan encontrar soluciones para la alimentación, higiene, salud y comodidad de sus animales de compañía.
                Con una visión centrada en la tenencia responsable y el amor por los animales, Petshop del Litoral busca acompañar a sus clientes ofreciendo asesoramiento, variedad de productos y un servicio confiable adaptado a las necesidades de cada mascota.
                </p>

                <p>
                    Desde nuestros comienzos buscamos crecer con compromiso, confianza y atención personalizada.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Misión Visión Valores -->
<section class="bg-light py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Nuestros Valores</h2>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 text-center p-4">
                    <h4>Misión</h4>
                    <p>
                        Brindar productos y servicios orientados al cuidado integral de las mascotas, ofreciendo calidad, atención personalizada y soluciones que contribuyan a su bienestar y al acompañamiento responsable de sus dueños.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 text-center p-4">
                    <h4>Visión</h4>
                    <p>
                        Ser una referencia en la región en productos y servicios para mascotas, destacándonos por la confianza, la atención cercana y el compromiso con el bienestar animal.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 text-center p-4">
                    <h4>Valores</h4>
                    <p>
                       Compromiso, Confianza, Respeto, Calidad, Responsabilidad
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>



</x-layout>