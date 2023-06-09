<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NombreActivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nombre_activo')->insert(['nombre' => 'PC']);
        DB::table('nombre_activo')->insert(['nombre' => 'Monitor']);
        DB::table('nombre_activo')->insert(['nombre' => 'Impresora']);
        DB::table('nombre_activo')->insert(['nombre' => 'Escaner / Scanner']);
        DB::table('nombre_activo')->insert(['nombre' => 'Fotocopiadora']);
        DB::table('nombre_activo')->insert(['nombre' => 'Archivador palanca / Condor']);
        DB::table('nombre_activo')->insert(['nombre' => 'Estante']);
    }
}
