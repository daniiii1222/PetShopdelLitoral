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

//document.addEventListener('DOMContentLoaded', function(){

    Swal.fire({
        title: 'Mensaje enviado',
        html: 'Hola <strong>{{ session("nombre") }}</strong>, qué bueno recibir tu mensaje.<br><br>Nos contactaremos al correo: <strong>{{ session("email") }}</strong><br><br>¡Muchas gracias!',
        icon: 'success',
        confirmButtonText: 'Aceptar'
    });

 //   });