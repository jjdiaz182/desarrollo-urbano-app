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
        Schema::create('apoderado_legals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_id')->constrained()->onDelete('cascade'); // Relación con Empresa
            $table->string('nombre');
            $table->enum('sexo', ['Masculino', 'Femenino', 'Otro']);
            $table->string('rfc')->unique();
            $table->string('curp')->unique();
            $table->string('prefijo')->nullable(); // Ej: Sr., Dra., Lic.
            $table->string('titulo')->nullable(); // Ej: Abogado, Contador
            $table->string('cedula')->nullable();
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->text('direccion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apoderado_legals');
    }
};
