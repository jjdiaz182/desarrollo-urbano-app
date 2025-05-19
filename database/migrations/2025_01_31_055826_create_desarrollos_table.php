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
        Schema::create('desarrollos', function (Blueprint $table) {
            $table->id(); // Llave primaria
            $table->foreignId('empresa_id')->constrained()->onDelete('cascade'); // Relación con Empresa
            $table->string('nombre');
            $table->string('tipo_desarrollo');
            $table->integer('numero_viviendas');
            $table->enum('tipo_vivienda', ['interes social', 'medio residencial', 'residencial']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desarrollos');
    }
};
