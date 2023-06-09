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
        Schema::create('tipo_activo_dimension', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->unsignedBigInteger('dimension_id');
            $table->foreign('dimension_id')->on('dimension')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
            
            $table->unsignedBigInteger('tipo_activos_id');
            $table->foreign('tipo_activos_id')->on('tipo_activos')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_activo_dimension');
    }
};
