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
        Schema::table('sales', function (Blueprint $table) {
            // Asegúrate de que los campos permitan valores nulos en caso de que
            // quieras permitir ventas sin productos asociados.
            $table->unsignedBigInteger('product_p_s_id')->nullable();
            $table->unsignedBigInteger('product_j_s_id')->nullable();

            // Agrega las llaves foráneas a las tablas existentes
            $table->foreign('product_p_s_id')->references('id')->on('product_p_s')->onDelete('set null');
            $table->foreign('product_j_s_id')->references('id')->on('product_j_s')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sales', function (Blueprint $table) {
            // Elimina las llaves foráneas y las columnas
            $table->dropForeign(['product_p_s_id']);
            $table->dropForeign(['product_j_s_id']);
            $table->dropColumn(['product_p_s_id', 'product_j_s_id']);
        });
    }
};
