<!DOCTYPE html>
<html>

    <head>
        
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/estilosPrincipal.css') }}"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
<nav class="navbar navbar-expand-lg bg-white shadow-sm">
  <div class="container">

    <!-- LOGO -->
    <h1 class="navbar-brand fw-bold" href="#">
      🐶 Pet Shop del Litoral 
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

  

 </div>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">

    </body>
        <footer>

        </footer>

</html>