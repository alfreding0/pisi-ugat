<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoActivosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_activos')->insert(['nombre' => 'Activos esenciales']);
        DB::table('tipo_activos')->insert(['nombre' => 'Arquitectura del sistema']);
        DB::table('tipo_activos')->insert(['nombre' => 'Datos / Información']);
        DB::table('tipo_activos')->insert(['nombre' => 'Claves Criptográficas']);
        DB::table('tipo_activos')->insert(['nombre' => 'Servicios']);
        DB::table('tipo_activos')->insert(['nombre' => 'Software - Aplicaciones informáticas']);
        DB::table('tipo_activos')->insert(['nombre' => 'Equipamiento informático (hardware)']);
    }
}
