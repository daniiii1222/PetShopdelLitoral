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
            <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Comercializacion</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Alimento</a></li>
                <li><a class="dropdown-item" href="#">Accesorios</a></li>
                <li><a class="dropdown-item" href="#">Ropa</a></li>
              </ul>
            </li>
            <li class="nav-item" class = "texto" ><a class="nav-link" href="#">Quienes Somos</a></li>
            <li class="nav-item" class = "texto" ><a class="nav-link" href="{{ url('/contacto') }}">Contacto</a></li>
            <li class="nav-item" class = "texto" ><a class="nav-link" href="{{ url('/terminosYUsos') }}">Terminos y Usos</a></li>
          </ul>



          
          <!-- BUSCADOR -->
          <form class="d-flex me-3">
            <input class="form-control" type="search" placeholder="Search here...">
            <button class="btn btn-primary ms-1">
              <i class="bi bi-search"></i>
            </button>
          </form>

          <!-- ICONOS -->
          <div class="d-flex gap-3">
            
            <a href="#" onclick="inicioSesion(event)"> <img  src ="{{ asset('Imagenes/usuario.png') }}" ></a>
            <i class="bi bi-cart fs-5"></i>
          </div>

        </div>
    </div>
</nav>