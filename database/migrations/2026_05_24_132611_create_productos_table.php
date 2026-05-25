<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
        {Schema::create('productos', function (Blueprint $table) {

        $table->id();

        $table->string('nombre_producto', 100);

        $table->string('descripcion_producto', 255);

        $table->decimal('precio_producto', 10, 2);

        $table->integer('stock_producto');

        $table->string('imagen_producto');

        // CATEGORIA
        $table->foreignId('categoria_id')
            ->constrained('categorias')
            ->onDelete('cascade');

        // SUBCATEGORIA ALIMENTO
        $table->foreignId('tipoAlimento_id')
            ->nullable()
            ->constrained('tipoAlimentos')
            ->nullOnDelete();

        // BAJA LOGICA
        $table->boolean('activo')->default(true);

        $table->timestamps();
    });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};