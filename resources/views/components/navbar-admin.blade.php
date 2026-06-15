<nav class="navbar navbar-expand-lg bg-white shadow-sm mi-navbar">

    <div class="container-fluid px-5">

        <!-- LOGO -->
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('Imagenes/LogoPetShop.jpg') }}"
                 alt="Logo PetShop"
                 class="logo">
        </a>

        <!-- BOTON MOBILE -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- CONTENIDO -->
        <div class="collapse navbar-collapse" id="menu">

            <!-- MENU -->
          
            <ul class="navbar-nav mx-auto">

          


                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dashboard') }}">
                        Panel
                    </a>
                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                    href="#"
                    data-bs-toggle="dropdown">

                        Productos

                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item"
                            href="{{ route('productos.create') }}">
                                Registrar
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                            href="{{ route('productos.index') }}">
                                Gestionar
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                            href="{{ route('productos.listado') }}">
                                Listar
                            </a>
                        </li>

        </ul>

    </li>

    <li class="nav-item">
        <a class="nav-link"
           href="{{ route('consultas.index') }}">
            Consultas
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link"
           href="{{ url('/ventas') }}">
            Ventas
        </a>
    </li>



            </ul>

            @auth
                <div class="usuario-admin">

                    <span class="fw-bold">
                        {{ Auth::user()->nombreRegistro }}
                    </span>

                    {{-- PERFIL --}}
                    <a href="">
                        <i class="bi bi-person fs-5"></i>
                    </a>

                    {{-- LOGOUT --}}
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

        </div>

    </div>

</nav>