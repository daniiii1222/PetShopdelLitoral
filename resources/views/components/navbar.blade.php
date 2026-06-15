
<nav class="navbar navbar-expand-lg bg-white shadow-sm mi-navbar">
    <div class="container">
        <img src ="{{ asset('Imagenes/LogoPetShop.jpg') }}" alt="Foto de un paisaje" width="200" height="100">   

        <!-- LOGO -->
        <h1 class="navbar-brand fw-bold" href="#"></h1>


        <!-- BOTON MOBILE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- CONTENIDO -->
        <div class="collapse navbar-collapse" id="menu">

          <!-- MENU -->
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ url('/productos') }}" data-bs-toggle="dropdown">Productos</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('/productos') }}">Todos</a></li>
                <li><a class="dropdown-item" href="{{ route('productos.productosPorCategoria', 1) }}">Alimento</a></li>
                <li><a class="dropdown-item" href="{{ route('productos.productosPorCategoria', 2) }}">Ropa</a></li>
                <li><a class="dropdown-item" href="{{ route('productos.productosPorCategoria', 3) }}">Accesorios</a></li>
              </ul>
            </li>
            <li class="nav-item" class = "texto" ><a class="nav-link" href="{{ url('/comercializacion') }}">Comercialización</a></li>
            <li class="nav-item" class = "texto" ><a class="nav-link" href="{{ url('/quienesSomos') }}">Quienes Somos</a></li>
            <li class="nav-item" class = "texto" ><a class="nav-link" href="{{ url('/contacto') }}">Contacto</a></li>
          </ul>

         

                      <!-- ICONOS -->
                @auth

                   <div class="usuario-navbar d-flex align-items-center gap-2">
                        <span class="fw-bold">
                            {{ Auth::user()->nombreRegistro }}
                        </span>

                        <a href="{{ route('perfil.show') }}">
                            <i class="bi bi-person fs-5"></i>
                        </a>

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-box-arrow-right"></i>
                            </button>
                        </form>
                    </div>

                @else

                    {{-- INVITADO --}}
                    <a href="#" onclick="inicioSesion(event)">

                        <img src="{{ asset('Imagenes/usuario.png') }}">

                    </a>

                @endauth

                {{-- CARRITO --}}

            <button class="btn btn-outline-light position-relative"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#carritoCanvas"
                    aria-controls="carritoCanvas">

                    🛒

                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ $cantidadCarrito ?? 0 }}
                    </span>

            </button>
   
            </div>


        </div>
    </div>

</nav>