<x-layout-admin title="Ver Consultas">
   
<div class="admin-page"> 

 <section class="bg-dark text-white py-5 mb-5">
        <div class="container text-center">

            <h1 class="fw-bold display-5">
                Consultas
            </h1>

            <p class="lead">
                Listado completo de consultas recibidas
            </p>

        </div>
    </section>

<div class="container mb-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="admin-title">Todas las consultas</h2>

        <a href="{{ route('dashboard') }}" class="btn-admin-outline">
            <i class="bi bi-arrow-left"></i>
            Volver al panel
        </a>
    </div>

    <div class="admin-card">

        <div class="table-responsive">

            <table class="table admin-table table-hover align-middle mb-0">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Asunto</th>
                        <th>Mensaje</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($consultas as $consulta)

                        <tr>
                            <td>{{ $consulta->id }}</td>
                            <td>{{ $consulta->nombre }}</td>
                            <td>{{ $consulta->email }}</td>
                            <td>{{ $consulta->asunto }}</td>

                            <td style="max-width: 300px;">
                                {{ Str::limit($consulta->mensaje, 80) }}
                            </td>

                            <td>{{ $consulta->created_at->format('d/m/Y') }}</td>

                            <td>
                                @if($consulta->estado == 'pendiente')
                                    <span class="badge-pendiente">Pendiente</span>
                                @else
                                    <span class="badge-respondida">Respondida</span>
                                @endif
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

</div>



</x-layout-admin>
