<x-layout title="Accesorios">

  <div class= "paginaProductos">
    <div class="container mt-4">

      <h2 class="text-center mb-4">Accesorios</h2>

    <h2 class="text-center mt-4">Accesorios para tu mascota</h2>
    <p class="text-center text-muted">Desde juegos hasta paseos, encontrá todo lo que tu mascota necesita para disfrutar al máximo.</p>


<div class="container">
    <div class="row justify-content-center" id="productos"></div>
<script>
    // Array de productos
    const productos = [
        {
            nombre: "Collar",
            precio: 8500,
            imagen: "Imagenes/AccesorioCollar.png"
            
        },
        {
            nombre: "Pechera",
            precio: 7200,
            imagen: "Imagenes/AccesorioPechera.png"
            
        },
        {
            nombre: "Broche",
            precio: 1500,
            imagen: "Imagenes/AccesorioPlatoDeComida.png"
            
        },
        {
            nombre: "Pañuelo",
            precio: 2500,
            imagen: "Imagenes/AccesorioRatrilloGatoAcero.png"
            
        }
    ];

    const contenedor = document.getElementById("productos");
productos.forEach(prod => {
    const card = document.createElement("div");

    card.classList.add("col-md-2", "mb-6");

     card.innerHTML = `
    <div class="card h-100 d-flex flex-column">
        <img src="${prod.imagen}" class="card-img-top">
        
        <div class="card-body d-flex flex-column">
           <h5 class="card-title text-center">${prod.nombre}</h5>
            <p class="text-success text-center">$${prod.precio}</p>

            <div class="mt-auto text-center">
                <button class="btn btn-dark">Comprar</button>
            </div>
        </div>
    </div>
`;

    document.getElementById("productos").appendChild(card);
});
</script>
</div>
      </div>
    </div>
    
      </div>
    </div>
  </div>
</x-layout>