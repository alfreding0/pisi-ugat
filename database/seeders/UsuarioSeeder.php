<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $passwd = bcrypt('toor');
        DB::table('users')->insert(['name'=>'Alfred', 'email'=>'alfredogonzales953@gmail.com', 'password'=>$passwd, 'funcionario_operativo_id'=>'1']);
        DB::table('users')->insert(['name'=>'Finley', 'email'=>'finley@gmail.com', 'password'=>$passwd, 'funcionario_operativo_id'=>'2']);
        DB::table('users')->insert(['name'=>'Yovana', 'email'=>'yovana@gmail.com', 'password'=>$passwd, 'funcionario_operativo_id'=>'3']);
    }
}
