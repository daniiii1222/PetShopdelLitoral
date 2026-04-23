<x-layout title="Ropa">

  <div class= "paginaProductos">
    <div class="container mt-4">

      <h2 class="text-center mb-4">Ropa</h2>

    <h2 class="text-center mt-4">Estilo y abrigo para cada aventura</h2>
    <p class="text-center text-muted">Prendas cómodas, cancheras y pensadas para que tu mascota esté protegida sin perder su personalidad</p>


<div class="container">
    <div class="row" id="productos"></div>
<script>
    // Array de productos
    const productos = [
        {
            nombre: "Buzo Frizado Negro",
            precio: 8500,
            imagen: "Imagenes/RopaPerro.png"
            
        },
        {
            nombre: "Buzo Frizado Azul",
            precio: 7200,
            imagen: "Imagenes/RopaPerro2.png"
            
        },
        {
            nombre: "Buzo Frizado Negro estampado",
            precio: 1500,
            imagen: "Imagenes/RopaPerro3.png"
            
        },
        {
            nombre: "Buzo Frizado Rosa Estampado",
            precio: 2500,
            imagen: "Imagenes/RopaGato.png"
            
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