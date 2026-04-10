<!DOCTYPE html>
<html lang="es">


    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="device= width, initial=scale=1.0"  >

    <title> Home </title>

      <!--ESTILOS-->
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/estilosPrincipal.css') }}"> 
      <!--FUENTE-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">

        

    </head>

  <body>

    <!-- barra login -->
    <div class="bg-dark text-white py-1">
      <div class="container d-flex justify-content-between">
        <small>Get 15% Discount + Free Gifts For Your First Order</small>
        <small><i class="bi bi-person"></i> Login / Register</small>
      </div>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm mi-navbar">
      <div class="container">
    <img src ="{{ asset('Imagenes/LogoPetShop.png') }}" alt="Foto de un paisaje" width="200" height="100">   

        <!-- LOGO -->
        <h1 class="navbar-brand fw-bold" href="#">
          
    </h1>


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
            <li class="nav-item" class = "texto" ><a class="nav-link" href="#">Contacto</a></li>
            <li class="nav-item" class = "texto" ><a class="nav-link" href="#">Terminos y Usos</a></li>
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
            <i class="bi bi-heart fs-5"></i>
            <i class="bi bi-cart fs-5"></i>
          </div>

        </div>
      </div>
    </nav>
          



          <!--Carusel -->
      <div class="container-fluid mb-3" >
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src ="{{ asset('Imagenes/1.jpeg') }}" class="d-block w-100"  alt="..." >
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src ="{{ asset('Imagenes/2.jpeg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src ="{{ asset('Imagenes/3.jpeg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src ="{{ asset('Imagenes/4.jpeg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src ="{{ asset('Imagenes/5.jpeg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- CATEGORIAS -->
    <div class= "container">
      <div class= "row row-cols-1 row-cols-md-3 g-4">
        <div class= "col">
          <div class="category-card p-3">
            <img src="{{ asset('Imagenes/1.png') }}" >
            <h5 class="category-title">ALIMENTO</h5>
           <!-- <p class="category-count">6 items</p> -->
          </div>
        </div>

        <div class= "col">
          <div class="category-card p-3">
            <img src="{{ asset('Imagenes/2.png') }}" >
            <h5 class="category-title">ACCESORIOS</h5>
            <!-- <p class="category-count">6 items</p> -->
          </div>
        </div>

        <div class= "col">
          <div class="category-card p-3">
            <img src="{{ asset('Imagenes/3.png') }}" >
            <h5 class="category-title">ROPA</h5>
            <!-- <p class="category-count">6 items</p> -->
          </div> 
        </div>


      </div>
    </div>
    <!--FOOTER-->
    <footer class="mi-footer mt-5">
      <div class="container text-center text-md-start py-4">
        <div class="row">
          
          <!-- Info del proyecto -->
          <div class="col-md-4 mb-3">
            <h5 class="footer-title">PetShop del Litoral</h5>
            <p class="footer-text">
              Tu tienda de confianza para productos de mascotas 🐾
            </p>
          </div>

          <!-- Links útiles -->
          <div class="col-md-4 mb-3">
            <h5 class="footer-title">Enlaces</h5>
            <ul class="list-unstyled">
              <li><a href="#">Inicio</a></li>
              <li><a href="#">Productos</a></li>
              <li><a href="#">Contacto</a></li>
            </ul>
          </div>

          <!-- Integrantes -->
          <div class="col-md-4 mb-3">
            <h5 class="footer-title">Integrantes</h5>
            <ul class="list-unstyled">
              <li>Nombre Apellido 1</li>
              <li>Nombre Apellido 2</li>
              <li>Nombre Apellido 3</li>
            </ul>
          </div>

        </div>

        <!-- Línea inferior -->
        <div class="text-center pt-3 border-top mt-3">
          <small>© 2026 PetShop del Litoral - Todos los derechos reservados</small>
        </div>
      </div>
    </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>