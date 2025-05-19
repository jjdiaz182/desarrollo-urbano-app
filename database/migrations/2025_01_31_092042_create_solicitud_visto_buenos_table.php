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
        Schema::create('solicitud_visto_buenos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_expediente')->unique();
            $table->foreignId('desarrollo_id')->constrained()->onDelete('cascade'); 
            $table->string('extension_superficial');
            $table->string('parcelas');
            $table->foreignId('representante_legal_id')->constrained('apoderado_legals')->onDelete('cascade'); 
            $table->string('escrituras_publicas');
            $table->string('numeros_registros_publicos');
            $table->string('superficie_escrituras_publicas');
            $table->string('escritura_legal_empresa');
            $table->string('folio_mercantil');
            $table->date('fecha_inscripcion_mercantil')->nullable();
            $table->string('oficio_fusion_subdivision');
            $table->date('fecha_fusion_subdivision')->nullable();
            $table->string('numeros_certificado_no_adeudo');
            $table->string('recibos_pago_1');
            $table->date('fecha_recibos_pago_1')->nullable();
            $table->string('recibos_pago_2');
            $table->date('fecha_recibos_pago_2')->nullable();
            $table->string('oficio_licencia_uso_suelo');
            $table->date('fecha_licencia_uso_suelo')->nullable();
            $table->string('extension_licencia_uso_suelo');
            $table->string('oficio_impacto_ambiental');
            $table->date('fecha_oficio_impacto_ambiental')->nullable();
            $table->string('extension_impacto_ambiental');
            $table->string('numeros_certificados_catastro');
            $table->string('periodo_emision');
            $table->string('extension_catastro');
            $table->string('oficio_cfe_factibilidad');
            $table->date('fecha_oficio_cfe_factibilidad')->nullable();
            $table->string('descripcion_factibilidad_cfe');
            $table->string('oficios_ooapas_factibilidad');
            $table->string('periodo_emision_factibilidad');
            $table->string('numero_viviendas_oficio_factibilidad_ooapas');
            $table->string('descripcion_oficio_factibilidad_ooapas');
            $table->string('oficio_ooapas_rasantes');
            $table->date('fecha_oficio_ooapas_rasantes')->nullable();
            $table->string('oficios_sct');
            $table->string('periodo_emision_oficios_sct');
            $table->string('descripcion_oficio_sct');
            $table->string('dependencia_ductos');
            $table->string('oficios_dependencia_ductos');
            $table->string('periodo_emision_oficios_dependencia_ductos');
            $table->string('descripcion_oficios_dependencia_ductos');
            $table->string('oficio_sedum');
            $table->date('fecha_oficio_sedum')->nullable();
            $table->string('descripcion_oficio_sedum');
            $table->string('reporte_tecnico_proteccion_civil');
            $table->string('oficio_reporte_tecnico_proteccion_civil');
            $table->string('periodo_oficio_reporte_tecnico_proteccion_civil');
            $table->string('reporte_municipal_desarrollo_urbano');
            $table->string('oficio_reporte_municipal_desarrollo_urbano');
            $table->date('fecha_oficio_reporte_municipal_desarrollo_urbano')->nullable();
            $table->string('oficio_direccion_patrimonio_municipal');
            $table->date('fecha_oficio_direccion_patrimonio_municipal')->nullable();
            $table->string('acuerdos_entrega_sedum');
            $table->string('director_desarrollo_urbano');
            $table->string('jefe_departamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitud_visto_buenos');
    }
};
