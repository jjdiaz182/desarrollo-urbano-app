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
        Schema::table('empresas', function (Blueprint $table) {
            //
            // Eliminar campo dirección
            $table->dropColumn('direccion');

            // Agregar nuevos campos
            $table->string('calle')->after('nombre');
            $table->string('codigo_postal')->after('calle');
            $table->string('colonia')->after('codigo_postal');
            $table->string('ciudad')->after('colonia');
            $table->string('estado')->after('ciudad');
            $table->string('pais')->after('estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('empresas', function (Blueprint $table) {
            //
            // Restaurar el campo dirección
            $table->string('direccion')->after('nombre');

            // Eliminar los nuevos campos
            $table->dropColumn(['calle', 'codigo_postal', 'colonia', 'ciudad', 'estado', 'pais']);

        });
    }
};
