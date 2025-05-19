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
        Schema::table('desarrollos', function (Blueprint $table) {
            //
            $table->string('pais')->after('empresa_id');
            $table->string('estado')->after('pais');
            $table->string('municipio')->after('estado');
            $table->string('alias')->nullable()->after('municipio');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('desarrollos', function (Blueprint $table) {
            //
            $table->dropColumn(['pais', 'estado', 'municipio', 'alias']);

        });
    }
};
