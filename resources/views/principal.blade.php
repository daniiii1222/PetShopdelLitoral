<!DOCTYPE html>
<html>

    <head>
        
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/estilosPrincipal.css') }}"> 
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
        <title> Home </title>

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
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Category 1</a></li>
            <li><a class="dropdown-item" href="#">Category 2</a></li>
          </ul>
        </li>

        <li class="nav-item" class = "texto" ><a class="nav-link" href="#">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Page</a></li>
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
      
        <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('Imagenes/1.png') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('Imagenes/2.png') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('Imagenes/3.png') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('Imagenes/4.png') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('Imagenes/5.png') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


  


    </body>


        <footer>

        </footer>


</html>