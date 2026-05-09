<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
    {
            Schema::create('contactos', function (Blueprint $table) {
        $table->id();
        $table->string('nombre', 150);
        $table->string('email');
        $table->string('asunto',250);
        $table->text('mensaje');
        $table->timestamps();
});
    }
    public function down(): void
    {
        Schema::dropIfExists('c_o_n_t_a_c_t_o_s');
    }
};
