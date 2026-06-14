<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        
        Schema::create('usuarios', function (Blueprint $table) {
        $table->id();
        $table->string('nombreRegistro', 150);
        $table->string('apellido', 150);
        $table->string('correo', 250)->unique();
        $table->string('telefono', 10);
        $table->string('contrasenia'); 
        $table->foreignId('perfil_id')->constrained('perfiles');
        $table->boolean('estado');

        $table->string('direccion')->nullable();
        $table->string('ciudad')->nullable();
        $table->string('provincia')->nullable();
        $table->string('codigo_postal')->nullable();
        $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
