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
            <li class="nav-item" class = "texto" ><a class="nav-link" href="{{ url('') }}">Registrar Productos</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ url('/productos') }}" data-bs-toggle="dropdown">Gestionar Productos</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('') }}">Agregar Producto</a></li>
                <li><a class="dropdown-item" href="{{ url('') }}">Modificar Producto</a></li>
                <li><a class="dropdown-item" href="{{ url('') }}">Eliminar Producto</a></li>
              </ul>
            </li>
            <li class="nav-item" class = "texto" ><a class="nav-link" href="{{ url('') }}">Ver Consultas</a></li>
            <li class="nav-item" class = "texto" ><a class="nav-link" href="{{ url('') }}">Listar Productos</a></li>
             <li class="nav-item" class = "texto" ><a class="nav-link" href="{{ url('') }}">Listar Ventas</a></li>
          </ul>


          <!-- ICONOS -->
          <div class="d-flex gap-3">
            
            <a href="#" onclick="inicioSesion(event)"> <img  src ="{{ asset('Imagenes/usuario.png') }}" ></a>
          
          </div>

        </div>
    </div>
</nav>