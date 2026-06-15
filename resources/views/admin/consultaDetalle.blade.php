<x-layout-admin title="Detalle Consulta">

    <section class="bg-dark text-white py-5 mb-5">
        <div class="container text-center">

            <h1 class="fw-bold display-5">
                Detalle de la Consulta
            </h1>

            <p class="lead">
                Información completa de la consulta recibida
            </p>

        </div>
    </section>

    <div class="container mb-5">

        <div class="card shadow border-0">

            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Consulta #{{ $consulta->id }}</h4>
            </div>

            <div class="card-body">

                <p><strong>Nombre:</strong> {{ $consulta->nombre }}</p>
                <p><strong>Email:</strong> {{ $consulta->email }}</p>
                <p><strong>Asunto:</strong> {{ $consulta->asunto }}</p>
                <p><strong>Mensaje:</strong></p>
                <div class="card mb-3">
                    <div class="card-body">
                        {!! nl2br(e($consulta->mensaje)) !!}
                    </div>
                </div>

                <p><strong>Fecha:</strong> {{ $consulta->created_at->format('d/m/Y H:i') }}</p>
                <p><strong>Estado:</strong> 
                    @if($consulta->estado == 'pendiente')
                        <span class="badge bg-warning text-dark">Pendiente</span>
                    @else
                        <span class="badge bg-success">Respondida</span>
                    @endif
                </p>

                <a href="{{ route('consultas.index') }}" class="btn btn-outline-secondary">Volver</a>

            </div>

        </div>

    </div>

</x-layout-admin>
