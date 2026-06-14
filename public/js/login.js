document.addEventListener("DOMContentLoaded", function () {
    const contenedor = document.querySelector('.contenedor-login');
    console.log("JS de Login cargado correctamente");

    // 1. Si Laravel devolvió errores por el método tradicional, abrir el modal
    if (contenedor) {
        if (contenedor.dataset.loginErrors === "1") {
            inicioSesion();
        } else if (contenedor.dataset.registerErrors === "1") {
            mostrarRegistro();
        }
    }

    const formLogin = document.getElementById("formLogin");
    const formRegistro = document.getElementById("formRegistro");

    if (formLogin) {
        formLogin.addEventListener("submit", async function (e) {
            
            // 2. DETENEMOS EL ENVÍO TRADICIONAL SIEMPRE para evitar recargas
            e.preventDefault();

            // Limpiar errores previos de JS
            document.querySelectorAll('.error-js').forEach(el => el.remove());

            const emailInput    = document.getElementById("email_login");
            const passwordInput = document.getElementById("contrasenia_login");

            if (!emailInput || !passwordInput) {
                console.error("No se encontraron los campos del formulario.");
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
            inicioSesion(); // mantener el modal abierto si hay error JS
            return; // Cortamos la ejecución acá si falta información
        }

        // 3. ENVÍO POR AJAX (FETCH) A LARAVEL
        try {
            const formData = new FormData(formLogin);

            const response = await fetch(formLogin.action, {
                method: formLogin.method || 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest', // Le indica a Laravel que es AJAX
                    'Accept': 'application/json'          // Esperamos JSON
                }
            });

            if (response.ok) {
                // Obtenemos la respuesta exitosa en JSON
                const data = await response.json();
                
                // Redirigimos al usuario a la ruta que nos mandó el controlador (dashboard o principal)
                if (data.redirect) {
                    window.location.href = data.redirect;
                } else {
                    window.location.reload(); 
                }

            } else if (response.status === 422) {
                const data = await response.json();
                
                let mensajeError = "El usuario o la contraseña son inválidos";
                
                // Buscamos el error "login_error" que creamos en el controlador, 
                // o los errores automáticos del LoginRequest
                if (data.errors && data.errors.login_error) {
                    mensajeError = data.errors.login_error[0];
                } else if (data.errors && data.errors.email_login) {
                    mensajeError = data.errors.email_login[0];
                } else if (data.errors && data.errors.contrasenia) {
                    mensajeError = data.errors.contrasenia[0];
                }

                // Mostramos el error devuelto por Laravel debajo de la contraseña
                mostrarError(passwordInput, mensajeError);
                inicioSesion(); // Mantenemos el modal abierto
                console.log("Error de validación 422 detectado y mostrado");
            } else {
                mostrarError(passwordInput, "Ocurrió un error en el servidor. Intentá de nuevo.");
            }

        } catch (error) {
            console.error("Error en la petición:", error);
            mostrarError(passwordInput, "Error de conexión con el servidor.");
        }
        });
    }

    // --- Formulario de Registro ---
    if (formRegistro) {
        formRegistro.addEventListener("submit", async function (e) {
            // 2. DETENEMOS EL ENVÍO TRADICIONAL SIEMPRE para evitar recargas
            e.preventDefault();

            // Limpiar errores previos de JS
            document.querySelectorAll('.error-js').forEach(el => el.remove());

            const nombreInput   = formRegistro.querySelector('input[name="nombreRegistro"]');
            const apellidoInput = formRegistro.querySelector('input[name="apellido"]');
            const correoInput   = formRegistro.querySelector('input[name="correo"]');
            const telefonoInput = formRegistro.querySelector('input[name="telefono"]');
            const passwordInput = formRegistro.querySelector('input[name="contrasenia"]');
            const confirmInput  = formRegistro.querySelector('input[name="password_confirmation"]');

            if (!nombreInput || !apellidoInput || !correoInput || !telefonoInput || !passwordInput || !confirmInput) {
                console.error("No se encontraron todos los campos del formulario de registro.");
                return;
            }

            const nombre     = nombreInput.value.trim();
            const apellido   = apellidoInput.value.trim();
            const correo     = correoInput.value.trim();
            const telefono   = telefonoInput.value.trim();
            const password   = passwordInput.value.trim();
            const confirm    = confirmInput.value.trim();

            let valido = true;

            // Validaciones del lado del cliente
            if (nombre === "") { valido = false; mostrarError(nombreInput, "El nombre es obligatorio"); }
            if (apellido === "") { valido = false; mostrarError(apellidoInput, "El apellido es obligatorio"); }
            if (correo === "") { 
                valido = false; mostrarError(correoInput, "El email es obligatorio"); 
            } else if (!correo.includes("@")) {
                valido = false; mostrarError(correoInput, "Ingresá un email válido");
            }
            if (telefono === "") { valido = false; mostrarError(telefonoInput, "El teléfono es obligatorio"); }
            if (password === "") { valido = false; mostrarError(passwordInput, "La contraseña es obligatoria"); }
            if (confirm === "") {
                valido = false; mostrarError(confirmInput, "Debes confirmar la contraseña");
            } else if (password !== confirm) {
                valido = false; mostrarError(confirmInput, "Las contraseñas no coinciden");
            }

            if (!valido) {
                mostrarRegistro();
                return;
            }

            try {
                const formData = new FormData(formRegistro);
                const response = await fetch(formRegistro.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();

                if (response.ok) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        window.location.reload();
                    }
                } else if (response.status === 422) {
                    if (data.errors) {
                        for (const field in data.errors) {
                            const input = formRegistro.querySelector(`[name="${field}"]`);
                            if (input) {
                                mostrarError(input, data.errors[field][0]);
                            }
                        }
                    }
                    mostrarRegistro();
                } else {
                    mostrarError(passwordInput, "Ocurrió un error en el servidor. Intentá de nuevo.");
                    mostrarRegistro();
                }

            } catch (error) {
                console.error("Error en la petición de registro:", error);
                mostrarError(passwordInput, "Error de conexión con el servidor.");
                mostrarRegistro();
            }
        });
    }
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