<x-layout-admin>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-header bg-dark text-white">
                    <h3 class="mb-0">Agregar Producto</h3>
                </div>

                <div class="card-body">

                    <form action="{{ route('productos.store') }}" 
                          method="POST" 
                          enctype="multipart/form-data">

                        @csrf

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label">
                                Nombre del Producto
                            </label>

                            <input type="text"
                                   name="nombre"
                                   id="nombre"
                                   class="form-control @error('nombre') is-invalid @enderror"
                                   value="{{ old('nombre') }}">

                            @error('nombre')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Descripción -->
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">
                                Descripción
                            </label>

                            <textarea name="descripcion"
                                      id="descripcion"
                                      rows="4"
                                      class="form-control @error('descripcion') is-invalid @enderror">{{ old('descripcion') }}</textarea>

                            @error('descripcion')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Precio -->
                        <div class="mb-3">
                            <label for="precio" class="form-label">
                                Precio
                            </label>

                            <input type="number"
                                   step="0.01"
                                   name="precio"
                                   id="precio"
                                   class="form-control @error('precio') is-invalid @enderror"
                                   value="{{ old('precio') }}">

                            @error('precio')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Stock -->
                        <div class="mb-3">
                            <label for="stock" class="form-label">
                                Stock
                            </label>

                            <input type="number"
                                   name="stock"
                                   id="stock"
                                   class="form-control @error('stock') is-invalid @enderror"
                                   value="{{ old('stock') }}">

                            @error('stock')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Categoría -->
                        <div class="mb-3">
                            <label for="categoria" class="form-label">
                                Categoría
                            </label>

                            <select name="categoria"
                                    id="categoria"
                                    class="form-select @error('categoria') is-invalid @enderror">

                                <option value="">
                                    Seleccione una categoría
                                </option>

                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}"
                                        {{ old('categoria') == $categoria->id ? 'selected' : '' }}>

                                        {{ $categoria->nombre_categoria }}

                                    </option>
                                @endforeach

                            </select>

                            @error('categoria')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Imagen -->
                        <div class="mb-3">
                            <label for="imagen" class="form-label">
                                Imagen del Producto
                            </label>

                            <input type="file"
                                   name="imagen"
                                   id="imagen"
                                   class="form-control @error('imagen') is-invalid @enderror">

                            @error('imagen')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Botones -->
                        <div class="d-flex justify-content-between">

                            <a href="{{ route('productos.index') }}"
                               class="btn btn-secondary">

                                Volver

                            </a>

                            <button type="submit"
                                    class="btn btn-success">

                                Guardar Producto

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
</x-layout-admin>