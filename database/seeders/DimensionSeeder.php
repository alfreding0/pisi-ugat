<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dimension')->insert(['nombre' => 'Disponibilidad']);
        DB::table('dimension')->insert(['nombre' => 'Integridad']);
        DB::table('dimension')->insert(['nombre' => 'Confidencialidad']);
        DB::table('dimension')->insert(['nombre' => 'Autenticidad']);
        DB::table('dimension')->insert(['nombre' => 'Trazabilidad']);
    }
}
