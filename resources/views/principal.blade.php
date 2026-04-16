
          

<x-layout title="Home">

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
    <div class= "container espaciado">
      <div class= "row row-cols-1 row-cols-md-3 g-4">
        <div class= "col">
          <div class="category-card p-3">
            <img src="{{ asset('Imagenes/categ-alimento.jpg') }}" >
            <h5 class="category-title">ALIMENTO</h5>
           <!-- <p class="category-count">6 items</p> -->
          </div>
        </div>

        <div class= "col">
          <div class="category-card p-3">
            <img src="{{ asset('Imagenes/categ-accesorios.jpg') }}" >
            <h5 class="category-title">ACCESORIOS</h5>
            <!-- <p class="category-count">6 items</p> -->
          </div>
        </div>

        <div class= "col">
          <div class="category-card p-3">
            <img src="{{ asset('Imagenes/categ-ropa.jpg') }}" >
            <h5 class="category-title">ROPA</h5>
            <!-- <p class="category-count">6 items</p> -->
          </div> 
        </div>


       
      </div>
    </div>
</x-layout>