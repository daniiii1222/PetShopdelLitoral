<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tipoAlimentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombreAnimal', 100);
            $table->boolean('activo')->default(true);
            $table->unsignedBigInteger('categoria_id'); // ✅ sin nullable, sin constrained todavía
            $table->timestamps();
        });
        // ✅ Insertamos con categoria_id desde el inicio
        DB::table('tipoAlimentos')->insert([
            ['nombreAnimal' => 'Perro',     'activo' => true, 'categoria_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombreAnimal' => 'Gato',      'activo' => true, 'categoria_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombreAnimal' => 'Cachorros', 'activo' => true, 'categoria_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // ✅ Agregamos la FK después de insertar los datos
        Schema::table('tipoAlimentos', function (Blueprint $table) {
            $table->foreign('categoria_id')
                  ->references('id')
                  ->on('categorias')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('tipoAlimentos');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
};