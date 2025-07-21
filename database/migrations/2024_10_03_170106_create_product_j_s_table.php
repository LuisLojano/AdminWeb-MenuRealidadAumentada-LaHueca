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
        Schema::create('product_j_s', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); 
            $table->decimal('costo', 10, 2);
            $table->string('imagen')->nullable(); 
            $table->string('url_diseno_3d')->nullable(); 
            $table->string('url_diseno_ra')->nullable(); 
            $table->boolean('activo')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_j_s');
    }
};
