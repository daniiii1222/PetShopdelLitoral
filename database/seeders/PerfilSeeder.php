<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perfiles')->insert([
            [
                'id' => 1,
                'perfil_nombre' => 'cliente'
            ],
            [
                'id' => 2,
                'perfil_nombre' => 'administrador'
            ]
        ]);

        
    }
}
