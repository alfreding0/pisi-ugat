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
        Schema::create('valoracion_dimension', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('valor');
            $table->string('justificacion');

            $table->unsignedBigInteger('dimension_id');
            $table->foreign('dimension_id')->on('dimension')->references('id')->cascadeOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('valoracion_activo_id');
            $table->foreign('valoracion_activo_id')->on('valoracion_activo')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valoracion_dimension');
    }
};
