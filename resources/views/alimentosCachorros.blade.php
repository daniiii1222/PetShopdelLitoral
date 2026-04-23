<x-layout title="Alimentos para Cachorros">

  <div class= "paginaProductos">
    <div class="container mt-4">

      <h2 class="text-center mb-4">Alimentos</h2>

    <h2 class="text-center mt-4">Alimentos para cachorros</h2>
    <p class="text-center text-muted">Todo lo que tu cachorro necesita para crecer 🐾</p>


<div class="container">
    <div class="row" id="productos"></div>
<script>
    // Array de productos
    const productos = [
        {
            nombre: "Balanceado Premium Perro Cachorro",
            precio: 8500,
            imagen: "Imagenes/AlimentoCachorroGato.png"
            
        },
        {
            nombre: "Balanceado Premium Perro Cachorro",
            precio: 7200,
            imagen: "Imagenes/AlimentoPerroCachorro.png"
            
        },
        {
            nombre: "Balanceado Perro Cachorro",
            precio: 1500,
            imagen: "Imagenes/AlimentoPerroCachorro2.png"
            
        },
        {
            nombre: "Balanceado Gato Cachorro",
            precio: 2500,
            imagen: "Imagenes/AlimentoCachorroGato2.png"
            
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