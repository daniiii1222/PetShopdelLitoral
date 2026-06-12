<x-layout title="Ver Consultas">

    <section class="bg-primary text-white text-center py-5 mb-5">
        <div class="container">
            <h1 class="fw-bold display-5">Consultas</h1>
            <p class="lead">Listado completo de consultas recibidas</p>
        </div>
    </section>

    <div class="container mb-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Todas las consultas</h2>
           <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left"></i> Volver al panel
            </a>
        </div>

        <div class="card shadow border-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark">
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
                                        <span class="badge bg-warning text-dark">Pendiente</span>
                                    @else
                                        <span class="badge bg-success">Respondida</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4">No hay consultas registradas</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</x-layout>