
<div class="contenedor-login pag-contacto" >
    <div class="container-login">
       
        <section class="form-login container min-vh-100 d-flex align-items-center justify-content-center">
            
        <div class="card shadow border-0 rounded-4 p-4 position-relative" style="max-width:420px; width:100%;">
                <button type="button"
                class="btn-cerrar"
                onclick="cerrarModal()">
                X
                </button>

                <div class="text-center mb-4">
                    <h2>Iniciar sesión</h2>
                    <p class="text-muted mb-0">
                        Accedé a tu cuenta
                    </p>
                </div>

                <form action="{{ route('registro.procesarLogin') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Correo electrónico</label>
                        <input 
                            type="email"
                            class="form-control"
                            placeholder="ejemplo@mail.com"
                            name="email"
                        >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input 
                            type="password"
                            class="form-control"
                            placeholder="********"
                            name="password"
                        >
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                        <div>
                            <input type="checkbox" id="recordar">
                            <label for="recordar">Recordarme</label>
                        </div>

                        <a href="#" class="text-decoration-none">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div>

                    <button class="btn btn-dark w-100 rounded-pill">
                        Ingresar
                    </button>

                </form>

                <hr>

                <p class="text-center mb-0">
                    ¿No tenés cuenta?
                    <a href="" onclick="mostrarRegistro(event)" class="text-decoration-none">
                        Registrarse
                    </a>
                </p>

            </div>

        </section>
        </div>


        
        <!--formulario registro-->
        <div class="container-registro">
        <section class=" container min-vh-100 d-flex align-items-center justify-content-center">
            
            <div class="card shadow border-0 rounded-4 p-4 position-relative" style="max-width:420px; width:100%;">

                <button type="button"
                class="btn-cerrar"
                onclick="cerrarModal()">
                X
                </button>

                <div class="text-center mb-4">
                    <h2>Crear cuenta</h2>
                </div>

                <form action="{{ route('procesarRegistro.procesarRegistro') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Apellido</label>
                        <input type="text" name="apellido" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Correo electrónico</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Teléfono</label>
                        <input type="text" name="telefono" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Confirmar contraseña</label>
                        <input type="password" name="password_confirmation" class="form-control">
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="terminos">
                        <label class="form-check-label" for="terminos">
                            Acepto términos y condiciones
                        </label>
                    </div>

                    <button type="submit" class="btn btn-dark w-100 rounded-pill">
                        Crear cuenta
                    </button>

                </form>

            </div>

        </section>
    </div>
</div>



