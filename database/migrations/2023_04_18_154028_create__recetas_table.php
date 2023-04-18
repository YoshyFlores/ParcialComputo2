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
        Schema::create('_recetas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //agregando propiedades a la tabla
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('tiempoPreparacion');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_recetas');
    }
};
