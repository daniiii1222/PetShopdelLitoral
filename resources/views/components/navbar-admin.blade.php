<nav class="navbar navbar-expand-lg bg-white shadow-sm mi-navbar">

    <div class="container">

        <!-- LOGO -->
        <a href="{{ route('admin.dashboard') }}">
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

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                       href="#"
                       data-bs-toggle="dropdown">

                        Gestionar Productos
                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item"
                               href="{{ url('/agregar-producto') }}">

                                Agregar Producto
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ url('/modificar-producto') }}">

                                Modificar Producto
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ url('/eliminar-producto') }}">

                                Eliminar Producto
                            </a>
                        </li>

                    </ul>

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

            <!-- ICONOS -->
            <div class="d-flex align-items-center gap-3">

                {{-- Nombre admin --}}
                <span class="fw-bold">
                    {{ Auth::user()->nombreRegistro }}
                </span>

                {{-- Logout --}}
                <form action="{{ route('logout') }}"
                      method="POST">

                    @csrf

                    <button type="submit"
                            class="btn btn-outline-danger">

                        <i class="bi bi-box-arrow-right"></i>

                    </button>

                </form>

            </div>

        </div>

    </div>

</nav>