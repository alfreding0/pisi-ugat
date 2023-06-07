<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('valoracion_activo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('codigo');
            $table->string('descripcion');

            $table->unsignedBigInteger('nombre_activo_id');
            $table->foreign('nombre_activo_id')->on('nombre_activo')->references('id')->cascadeOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('tipo_activos_id');
            $table->foreign('tipo_activos_id')->on('tipo_activos')->references('id')->cascadeOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('dependencia_id');
            $table->foreign('dependencia_id')->on('dependencia')->references('id')->cascadeOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('funcionario_operativo_id');
            $table->foreign('funcionario_operativo_id')->on('funcionario_operativo')->references('id')->cascadeOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->on('users')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valoracion_activo');
    }
};
