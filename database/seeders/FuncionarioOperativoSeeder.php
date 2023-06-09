<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuncionarioOperativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('funcionario_operativo')->insert(['nombre' => 'Alfredo Gonzales', 'cargo'=>'Kardex y Estadísticas']);
        DB::table('funcionario_operativo')->insert(['nombre' => 'Finley Guerra', 'cargo'=>'Admisiones y Registros']);
        DB::table('funcionario_operativo')->insert(['nombre' => 'Yovana Nina', 'cargo'=>'Titulos']);
    }
}
