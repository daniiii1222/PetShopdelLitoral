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

<<<<<<< HEAD
<!-- CATEGORIAS -->
 <div class= "container">
  <div class= "row row-cols-1 row-cols-md-3 g-4">
    <div class= "col">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
=======
>>>>>>> d08ad28479f9586e47f8b825f20011634be96f28
        </div>
      </div>
    </nav>
          

<<<<<<< HEAD
    <div class= "col">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
=======


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
>>>>>>> d08ad28479f9586e47f8b825f20011634be96f28
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
<<<<<<< HEAD

    <div class= "col">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
=======
    <!-- CATEGORIAS -->
    <div class= "container">
      <div class= "row row-cols-1 row-cols-md-3 g-4">
        <div class= "col">
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            </div>
          </div> 
>>>>>>> d08ad28479f9586e47f8b825f20011634be96f28
        </div>

        <div class= "col">
          <div class="category-card p-3">
            <img src="{{ asset('Imagenes/LogoPetShop.png') }}" width="200" height="100">
            <h5 class="category-title">Dog</h5>
            <p class="category-count">6 items</p>
          </div>
        </div>

        <div class= "col">
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            </div>
          </div> 
        </div>


      </div>
    </div>
    <!--FOOTER-->
    <footer>

    </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>