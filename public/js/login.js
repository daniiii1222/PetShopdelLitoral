function inicioSesion(e){
    if(e) e.preventDefault();

    document.querySelector('.contenedor-login')
        .classList.add('activo');

    document.querySelector('.container-registro')
        .style.display='none';

    document.querySelector('.container-login')
        .style.display='block';

}

document.addEventListener("DOMContentLoaded", function () {

    const contenedor = document.querySelector('.contenedor-login');

    if(contenedor.dataset.loginErrors === "1"){
        inicioSesion();
    }

});

document.addEventListener("DOMContentLoaded", function () {
    const formLogin = document.getElementById("formLogin");

    if (!formLogin) return;

    formLogin.addEventListener("submit", function (e) {
        e.preventDefault();

        const emailInput = formLogin.querySelector('[name="email_login"]');
        const passwordInput = formLogin.querySelector('[name="password"]');

        const email = emailInput.value.trim();
        const password = passwordInput.value.trim();

        document.querySelectorAll('.error-js').forEach(el => el.remove());

        let valido = true;

        if (email === "") {
            valido = false;
            mostrarError(emailInput, "El email es obligatorio");
        } else if (!email.includes("@")) {
            valido = false;
            mostrarError(emailInput, "Ingresá un email válido");
        }

        if (password === "") {
            valido = false;
            mostrarError(passwordInput, "La contraseña es obligatoria");
        }

        if (valido) {
            formLogin.submit();
        } else {
            inicioSesion();
        }
    });
});

function mostrarError(input, mensaje) {
    const small = document.createElement("small");
    small.classList.add("text-danger", "error-js");
    small.innerText = mensaje;
    input.parentNode.appendChild(small);
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


