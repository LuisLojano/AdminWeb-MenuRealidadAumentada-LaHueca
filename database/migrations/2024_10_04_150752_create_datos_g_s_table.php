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
        Schema::create('datos_g_s', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empresa'); 
            $table->string('logo')->nullable(); 
            $table->string('ruc', 13);
            $table->string('correo'); 
            $table->string('telefono'); 
            $table->string('direccion'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_g_s');
    }
};
