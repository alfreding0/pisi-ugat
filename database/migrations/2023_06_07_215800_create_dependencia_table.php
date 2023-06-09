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
        Schema::create('dependencia', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('grado');

            $table->unsignedBigInteger('nombre_activo_id');
            $table->foreign('nombre_activo_id')->on('nombre_activo')->references('id')->cascadeOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('valoracion_activo_id');
            $table->foreign('valoracion_activo_id')->on('valoracion_activo')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dependencia');
    }
};
