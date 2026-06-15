
<x-layout-admin title="Dashboard Admin">
    
    <section class="bg-primary text-white text-center py-5 mb-5">
        <div class="container">

            <h1 class="fw-bold display-5">
                Panel de Administración
            </h1>

            <p class="lead">
                Gestión general del sistema
            </p>

        </div>
    </section>

    <div class="container mb-5">

        {{-- TITULO --}}
        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2 class="fw-bold" style="color:#211815;">
                Dashboard Administrador
            </h2>
        </div>

        {{-- CARDS --}}
        <div class="row g-4 mb-5">

            {{-- USUARIOS --}}
            <div class="col-md-3">

                <div class="card shadow-sm border-0 h-100">

                    <div class="card-body d-flex align-items-center gap-3">

                        <div class="fs-1 text-primary">
                            <i class="bi bi-people-fill  icono-admin"></i>
                        </div>

                        <div>
                            <h6 class="text-muted mb-1">
                                Usuarios
                            </h6>

                            <h2 class="fw-bold">
                                {{ $usuarios }}
                            </h2>
                        </div>

                    </div>

                </div>

            </div>

            {{-- PRODUCTOS --}}
            <div class="col-md-3">

                <div class="card shadow-sm border-0 h-100">

                    <div class="card-body d-flex align-items-center gap-3">

                        <div class="fs-1 text-success">
                            <i class="bi bi-phone-fill  icono-admin"></i>
                        </div>

                        <div>
                            <h6 class="text-muted mb-1">
                                Productos
                            </h6>

                            <h2 class="fw-bold">
                                {{ $productos }}
                            </h2>
                        </div>

                    </div>

                </div>

            </div>

            {{-- PEDIDOS --}}
            <div class="col-md-3">

                <div class="card shadow-sm border-0 h-100">

                    <div class="card-body d-flex align-items-center gap-3">

                        <div class="fs-1 text-warning">
                            <i class="bi bi-cart-fill icono-admin"></i>
                        </div>

                        <div>
                            <h6 class="text-muted mb-1">
                                Ventas
                            </h6>

                                <h2 class="fw-bold">
                                {{ $ventas }}
                                </h2>
                           
                        </div>

                    </div>

                </div>

            </div>

            {{-- CONSULTAS --}}
            <div class="col-md-3">

                <div class="card shadow-sm border-0 h-100">

                    <div class="card-body d-flex align-items-center gap-3">

                        <div class="fs-1 text-danger">
                            <i class="bi bi-envelope-fill  icono-admin"></i>
                        </div>

                        <div>
                            <h6 class="text-muted mb-1">
                                Consultas
                            </h6>

                            <h2 class="fw-bold">
                                {{ $consultas }}
                            </h2>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        {{-- TABLA CONSULTAS --}}
        <div class="card shadow border-0 mb-5">

            <div class="card-header bg-dark text-white">

                <h4 class="mb-0">
                    Consultas Recientes
                </h4>

            </div>

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">

                        <tr>
                            <th>#</th>
                            <th>Usuario</th>
                            <th>Email</th>
                            <th>Consulta</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th class="text-center">Acciones</th>
                        </tr>

                    </thead>

                    <tbody>

                        @forelse($ultimasConsultas as $consulta)

                            <tr>

                                <td>
                                    {{ $consulta->id }}
                                </td>

                                <td>
                                    {{ $consulta->nombre }}
                                </td>

                                <td>
                                    {{ $consulta->email }}
                                </td>

                                <td style="max-width: 250px;">
                                    {{ Str::limit($consulta->mensaje, 60) }}
                                </td>

                                <td>
                                    {{ $consulta->created_at->format('d/m/Y') }}
                                </td>

                                <td>

                                    @if($consulta->estado == 'pendiente')

                                        <span class="badge bg-warning text-dark">
                                            Pendiente
                                        </span>

                                    @else

                                        <span class="badge bg-success">
                                            Respondida
                                        </span>

                                    @endif

                                </td>

                                <td class="text-center">

                                   <a href="{{ route('consultas.show', $consulta->id) }}" class="btn btn-primary btn-sm">Ver</a>
                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="7" class="text-center py-4">

                                    No hay consultas registradas

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

                {{-- TABLA USUARIOS --}}
        <div class="card shadow border-0 mb-5">

            <div class="card-header bg-dark text-white">

                <h4 class="mb-0">
                    Usuarios Registrados
                </h4>

            </div>

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">

                        <tr>

                            <th>#</th>

                            <th>Nombre</th>

                            <th>Apellido</th>

                            <th>Correo</th>

                            <th>Teléfono</th>

                            <th>Estado</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($ultimosUsuarios as $usuario)

                            <tr>

                                <td>
                                    {{ $usuario->id }}
                                </td>

                                <td>
                                    {{ $usuario->nombreRegistro }}
                                </td>

                                <td>
                                    {{ $usuario->apellido }}
                                </td>

                                <td>
                                    {{ $usuario->correo }}
                                </td>

                                <td>
                                    {{ $usuario->telefono }}
                                </td>

                                <td>

                                    @if($usuario->estado)

                                        <span class="badge bg-success">
                                            Activo
                                        </span>

                                    @else

                                        <span class="badge bg-danger">
                                            Inactivo
                                        </span>

                                    @endif

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="6" class="text-center py-4">

                                    No hay usuarios registrados

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

        {{-- ACCESOS RAPIDOS --}}
        <div class="card shadow border-0">

            <div class="card-header bg-dark text-white">

                <h4 class="mb-0">
                    Accesos rápidos
                </h4>

            </div>

            <div class="card-body d-flex flex-wrap gap-3">

                <a href="{{ route('productos.index') }}"
                   class="btn btn-outline-primary">

                    <i class="bi bi-phone "></i>
                    Gestionar productos

                </a>

                <a href="{{ route('consultas.index') }}" class="btn btn-outline-danger">
                    <i class="bi bi-envelope"></i>
                    Ver consultas
                </a>

                <a href="{{ url('/dashboard') }}"
                   class="btn btn-outline-secondary">

                    <i class="bi bi-house"></i>
                    Ir al inicio

                </a>

            </div>

        </div>

    </div>

</x-layout-admin>