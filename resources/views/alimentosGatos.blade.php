<x-layout title="Alimentos para Gatos">

  <div class= "paginaProductos">
    <div class="container mt-4">

      <h2 class="text-center mb-4">Alimentos</h2>

    <h2 class="text-center mt-4">Alimentos para gatos</h2>
    <p class="text-center text-muted">Opciones equilibradas y deliciosas para cuidar la salud y el bienestar de tu gato en cada comida.</p>


<div class="container">
    <div class="row" id="productos"></div>
<script>
    // Array de productos
    const productos = [
        {
            nombre: "Balanceado Premium Gato",
            precio: 8500,
            imagen: "Imagenes/AlimentoGatoAdulto.png"
        },
        {
            nombre: "Balanceado Gato Adulto",
            precio: 7200,
            imagen: "Imagenes/AlimentoGatoAdulto2.png"
        },
        {
            nombre: "Alimento Húmedo Lata",
            precio: 1500,
            imagen: "Imagenes/AlimentoGatoAdulto3.png"
        },
        {
            nombre: "Balanceado Gato Adulto",
            precio: 2500,
            imagen: "Imagenes/AlimentoHumedoGato.png"
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