<x-layout title="Alimentos">

  <div class= "paginaProductos">
    <div class="container mt-4">

      <h2 class="text-center mb-4">Productos</h2>

    <h2 class="text-center mt-4">Alimentos</h2>
    <p class="text-center text-muted">Todo lo que tu mascota necesita para alimentarse 🐾</p>

    <div class="d-flex justify-content-center gap-2 mb-4 flex-wrap">
      <button class="btn btn-custom">Perros</button>
    <button class="btn btn-custom">Gatos</button>
    <button class="btn btn-custom">Cachorros</button>
    </div>

<div class="container">
    <div class="row" id="productos"></div>


<script>
    // Array de productos
    const productos = [
        {
            nombre: "Balanceado Premium Gato Cachorro",
            precio: 8500,
            imagen: "Imagenes/AlimentoCachorroGato.png"           
        },
        {
            nombre: "Balanceado Perro Cachorro",
            precio: 7200,
            imagen: "Imagenes/AlimentoPerroCachorro.png" 
        },
        {
            nombre: "Balanceado Gato Adulto",
            precio: 1500,
            imagen: "Imagenes/AlimentoGatoAdulto.png" 
        },
        {
            nombre: "Balanceado Perro Adulto",
            precio: 2500,
            imagen: "Imagenes/alimentoPerroAdulto.png" 
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