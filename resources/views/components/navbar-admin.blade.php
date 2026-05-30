<nav class="navbar navbar-expand-lg bg-white shadow-sm mi-navbar">

    <div class="container">

        <!-- LOGO -->
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('Imagenes/LogoPetShop.jpg') }}"
                 alt="Logo PetShop"
                 width="200"
                 height="100">
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

                <li class="nav-item texto">
                    <a class="nav-link"
                       href="{{ url('/registrar-producto') }}">

                        Registrar Productos
                    </a>
                </li>

                <li class="nav-item texto">
                    <a class="nav-link"
                       href="{{ url('/gestionar-producto') }}">

                        Gestionar Productos
                    </a>
                </li>


                <li class="nav-item texto">
                    <a class="nav-link"
                       href="{{ url('/consultas') }}">

                        Ver Consultas
                    </a>
                </li>

                <li class="nav-item texto">
                    <a class="nav-link"
                       href="{{ url('/listar-productos') }}">

                        Listar Productos
                    </a>
                </li>

                <li class="nav-item texto">
                    <a class="nav-link"
                       href="{{ url('/ventas') }}">

                        Listar Ventas
                    </a>
                </li>

            </ul>

            @auth

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

                @else

                    {{-- INVITADO --}}
                    <a href="#" onclick="inicioSesion(event)">

                        <img src="{{ asset('Imagenes/usuario.png') }}">

                    </a>

                @endauth

        </div>

    </div>

</nav>