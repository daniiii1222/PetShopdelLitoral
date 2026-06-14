
<x-layout-admin title="Modificar Producto">

    <div class="container py-5">

        <div class="card shadow border-0">

            <div class="card-header bg-warning">

                <h3 class="mb-0">
                    Modificar Producto
                </h3>

            </div>

            <div class="card-body">

                <form id="formModificarProducto"
                      action="{{ route('productos.update', $producto->id) }}"
                      method="POST"
                      enctype="multipart/form-data"
                      novalidate>

                    @csrf
                    @method('PUT')

                    {{-- NOMBRE --}}
                    <div class="mb-3">

                        <label class="form-label">
                            Nombre
                        </label>

                        <input type="text"
                               name="nombre"
                               class="form-control"
                               value="{{ old('nombre', $producto->nombre_producto) }}">

                        @error('nombre')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror

                    </div>

                    {{-- DESCRIPCION --}}
                    <div class="mb-3">

                        <label class="form-label">
                            Descripción
                        </label>

                        <textarea name="descripcion"
                                  rows="4"
                                  class="form-control">{{ old('descripcion', $producto->descripcion_producto) }}</textarea>

                        @error('descripcion')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror

                    </div>

                    <div class="row">

                        {{-- PRECIO --}}
                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Precio
                            </label>

                            <input type="number"
                                   step="0.01"
                                   name="precio"
                                   class="form-control"
                                   value="{{ old('precio', $producto->precio_producto) }}">

                            @error('precio')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>

                        {{-- STOCK --}}
                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Stock
                            </label>

                            <input type="number"
                                   name="stock"
                                   class="form-control"
                                   value="{{ old('stock', $producto->stock_producto) }}">

                            @error('stock')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>

                    </div>

                    {{-- CATEGORIA --}}
                    <div class="mb-3">

                        <label class="form-label">
                            Categoría
                        </label>

                        <select name="categoria"
                                id="categoria"
                                class="form-select">

                            @foreach($categorias as $categoria)

                                <option value="{{ $categoria->id }}"
                                    {{ old('categoria', $producto->categoria_id) == $categoria->id ? 'selected' : '' }}>

                                    {{ $categoria->nombre_categoria }}

                                </option>

                            @endforeach

                        </select>

                        @error('categoria')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror

                    </div>

                    {{-- TIPO ALIMENTO --}}
                    <div class="mb-3 d-none" id="contenedorTipoAlimento">

                        <label class="form-label">
                            Tipo de Alimento
                        </label>

                        <select name="tipoAlimento"
                                id="tipoAlimento"
                                class="form-select">

                            <option value="">
                                Seleccione una opción
                            </option>

                            @foreach($tiposAlimentos as $tipo)

                                <option value="{{ $tipo->id }}"
                                    {{ old('tipoAlimento', $producto->tipoAlimento_id) == $tipo->id ? 'selected' : '' }}>

                                    {{ $tipo->nombre }}

                                </option>

                            @endforeach

                        </select>

                        @error('tipoAlimento')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror

                    </div>

                    {{-- IMAGEN ACTUAL --}}
                    <div class="mb-3">

                        <label class="form-label">
                            Imagen actual
                        </label>

                        <br>

                        @if($producto->imagen_producto)

                            <img src="{{ asset('storage/'.$producto->imagen_producto) }}"
                                 width="200"
                                 class="img-thumbnail">

                        @else

                            <p class="text-muted">
                                El producto no posee imagen.
                            </p>

                        @endif

                    </div>

                    {{-- NUEVA IMAGEN --}}
                    <div class="mb-4">

                        <label class="form-label">
                            Nueva imagen (opcional)
                        </label>

                        <input type="file"
                               name="imagen"
                               class="form-control">

                        <small class="text-muted">
                            Dejá este campo vacío para conservar la imagen actual.
                        </small>

                        @error('imagen')
                            <small class="text-danger d-block">
                                {{ $message }}
                            </small>
                        @enderror

                    </div>

                    {{-- BOTONES --}}
                    <div class="d-flex gap-2">

                        <button type="submit"
                                class="btn btn-success">

                            Guardar Cambios

                        </button>

                        <a href="{{ route('productos.index') }}"
                           class="btn btn-secondary">

                            Cancelar

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('formModificarProducto');
            const categoria = document.getElementById('categoria');
            const contenedorTipo = document.getElementById('contenedorTipoAlimento');

            function mostrarTipoAlimento() {
                if (!categoria || !contenedorTipo) return;

                if (categoria.value === '1') {
                    contenedorTipo.classList.remove('d-none');
                } else {
                    contenedorTipo.classList.add('d-none');
                }
            }

            if (categoria) {
                categoria.addEventListener('change', mostrarTipoAlimento);
                mostrarTipoAlimento();
            }

            if (!form) return;

            form.addEventListener('submit', function (e) {
                document.querySelectorAll('.error-js-modificar').forEach(el => el.remove());

                const requiredFields = [
                    { selector: 'input[name="nombre"]', message: 'El nombre es obligatorio' },
                    { selector: 'textarea[name="descripcion"]', message: 'La descripción es obligatoria' },
                    { selector: 'input[name="precio"]', message: 'El precio es obligatorio' },
                    { selector: 'input[name="stock"]', message: 'El stock es obligatorio' },
                    { selector: 'select[name="categoria"]', message: 'La categoría es obligatoria' }
                ];

                if (categoria && categoria.value === '1') {
                    requiredFields.push({ selector: 'select[name="tipoAlimento"]', message: 'El tipo de alimento es obligatorio' });
                }

                let valido = true;

                requiredFields.forEach(field => {
                    const input = form.querySelector(field.selector);
                    if (!input) return;

                    const value = input.value.trim();
                    if (value === '' || (input.tagName === 'SELECT' && value === '')) {
                        valido = false;
                        const small = document.createElement('small');
                        small.classList.add('text-danger', 'error-js-modificar');
                        small.innerText = field.message;
                        input.parentNode.appendChild(small);
                    }
                });

                if (!valido) {
                    e.preventDefault();
                }
            });
        });
    </script>

        </div>

    </div>

</x-layout-admin>

