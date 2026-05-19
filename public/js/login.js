document.addEventListener("DOMContentLoaded", function () {
    const contenedor = document.querySelector('.contenedor-login');

    // 1. Si Laravel devolvió errores, abrir el modal de login
    if (contenedor && contenedor.dataset.loginErrors === "1") {
        inicioSesion();
    }

    // 2. Buscar el form DESPUÉS de que el DOM cargó
    const formLogin = document.getElementById("formLogin");
    if (!formLogin) return;

    formLogin.addEventListener("submit", function (e) {

        // Limpiar errores previos de JS
        document.querySelectorAll('.error-js').forEach(el => el.remove());

        const emailInput    = document.getElementById("email_login");
        const passwordInput = document.getElementById("contrasenia_login");

        // Seguridad: si por alguna razón no existen los campos, cortar
        if (!emailInput || !passwordInput) {
            console.error("No se encontraron los campos del formulario.");
            e.preventDefault();
            return;
        }

        const email    = emailInput.value.trim();
        const password = passwordInput.value.trim();

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

        if (!valido) {
            e.preventDefault();
            inicioSesion(); // mantener el modal abierto si hay error JS
        }
        // Si valido === true, el form se envía normalmente a Laravel
    });
});

// --- Funciones del modal ---

function inicioSesion(e) {
    if (e) e.preventDefault();
    const contenedor = document.querySelector('.contenedor-login');
    const cLogin     = document.querySelector('.container-login');
    const cRegistro  = document.querySelector('.container-registro');

    if (contenedor) contenedor.classList.add('activo');
    if (cRegistro)  cRegistro.style.display  = 'none';
    if (cLogin)     cLogin.style.display     = 'block';
}

function mostrarRegistro(e) {
    if (e) e.preventDefault();
    const contenedor = document.querySelector('.contenedor-login');
    const cLogin     = document.querySelector('.container-login');
    const cRegistro  = document.querySelector('.container-registro');

    if (contenedor) contenedor.classList.add('activo');
    if (cLogin)     cLogin.style.display    = 'none';
    if (cRegistro)  cRegistro.style.display = 'block';
}

function cerrarModal() {
    const contenedor = document.querySelector('.contenedor-login');
    if (contenedor) contenedor.classList.remove('activo');
}

function mostrarError(input, mensaje) {
    const small = document.createElement("small");
    small.classList.add("text-danger", "error-js");
    small.innerText = mensaje;
    input.parentNode.appendChild(small);
}