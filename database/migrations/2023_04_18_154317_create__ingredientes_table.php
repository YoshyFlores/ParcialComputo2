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
        Schema::create('_ingredientes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //propiedades definidas manualmente
            $table->String('nombre');
            $table->integer('cantidad');
            $table->String('unidad');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_ingredientes');
    }
};
