<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoActivoDimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_activo_dimension')->insert(['tipo_activos_id' => '3', 'dimension_id'=>'1']);
        DB::table('tipo_activo_dimension')->insert(['tipo_activos_id' => '3', 'dimension_id'=>'2']);
        DB::table('tipo_activo_dimension')->insert(['tipo_activos_id' => '3', 'dimension_id'=>'3']);

        DB::table('tipo_activo_dimension')->insert(['tipo_activos_id' => '2', 'dimension_id'=>'1']);
        DB::table('tipo_activo_dimension')->insert(['tipo_activos_id' => '2', 'dimension_id'=>'3']);

        DB::table('tipo_activo_dimension')->insert(['tipo_activos_id' => '1', 'dimension_id'=>'1']);
        DB::table('tipo_activo_dimension')->insert(['tipo_activos_id' => '1', 'dimension_id'=>'2']);
    }
}
