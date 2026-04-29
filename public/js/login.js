function inicioSesion(e){
    if(e) e.preventDefault();

    document.querySelector('.contenedor-login')
        .classList.add('activo');

    document.querySelector('.container-registro')
        .style.display='none';

    document.querySelector('.container-login')
        .style.display='block';
}

function mostrarRegistro(e){
    e.preventDefault();

    document.querySelector('.contenedor-login')
        .classList.add('activo');

    document.querySelector('.container-login')
        .style.display='none';

    document.querySelector('.container-registro')
        .style.display='block';
}

/* para cerrar modal después */
function cerrarModal(){
    document.querySelector('.contenedor-login')
        .classList.remove('activo');
}

