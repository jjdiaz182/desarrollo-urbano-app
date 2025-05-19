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
        Schema::table('solicitud_visto_buenos', function (Blueprint $table) {
            //
            $table->text('numero_expediente')->change();
            $table->text('extension_superficial')->change();
            $table->text('parcelas')->change();
            $table->text('escrituras_publicas')->change();
            $table->text('numeros_registros_publicos')->change();
            $table->text('superficie_escrituras_publicas')->change();
            $table->text('escritura_legal_empresa')->change();
            $table->text('folio_mercantil')->change();
            $table->text('oficio_fusion_subdivision')->change();
            $table->text('numeros_certificado_no_adeudo')->change();
            $table->text('recibos_pago_1')->change();
            $table->text('recibos_pago_2')->change();
            $table->text('oficio_licencia_uso_suelo')->change();
            $table->text('extension_licencia_uso_suelo')->change();
            $table->text('oficio_impacto_ambiental')->change();
            $table->text('extension_impacto_ambiental')->change();
            $table->text('numeros_certificados_catastro')->change();
            $table->text('periodo_emision')->change();
            $table->text('extension_catastro')->change();
            $table->text('oficio_cfe_factibilidad')->change();
            $table->text('descripcion_factibilidad_cfe')->change();
            $table->text('oficios_ooapas_factibilidad')->change();
            $table->text('periodo_emision_factibilidad')->change();
            $table->text('numero_viviendas_oficio_factibilidad_ooapas')->change();
            $table->text('descripcion_oficio_factibilidad_ooapas')->change();
            $table->text('oficio_ooapas_rasantes')->change();
            $table->text('oficios_sct')->change();
            $table->text('periodo_emision_oficios_sct')->change();
            $table->text('descripcion_oficio_sct')->change();
            $table->text('dependencia_ductos')->change();
            $table->text('oficios_dependencia_ductos')->change();
            $table->text('periodo_emision_oficios_dependencia_ductos')->change();
            $table->text('descripcion_oficios_dependencia_ductos')->change();
            $table->text('oficio_sedum')->change();
            $table->text('descripcion_oficio_sedum')->change();
            $table->text('reporte_tecnico_proteccion_civil')->change();
            $table->text('oficio_reporte_tecnico_proteccion_civil')->change();
            $table->text('periodo_oficio_reporte_tecnico_proteccion_civil')->change();
            $table->text('reporte_municipal_desarrollo_urbano')->change();
            $table->text('oficio_reporte_municipal_desarrollo_urbano')->change();
            $table->text('oficio_direccion_patrimonio_municipal')->change();
            $table->text('acuerdos_entrega_sedum')->change();
            $table->text('director_desarrollo_urbano')->change();
            $table->text('jefe_departamento')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('solicitud_visto_buenos', function (Blueprint $table) {
            //
            $table->string('numero_expediente')->change();
            $table->string('extension_superficial')->change();
            $table->string('parcelas')->change();
            $table->string('escrituras_publicas')->change();
            $table->string('numeros_registros_publicos')->change();
            $table->string('superficie_escrituras_publicas')->change();
            $table->string('escritura_legal_empresa')->change();
            $table->string('folio_mercantil')->change();
            $table->string('oficio_fusion_subdivision')->change();
            $table->string('numeros_certificado_no_adeudo')->change();
            $table->string('recibos_pago_1')->change();
            $table->string('recibos_pago_2')->change();
            $table->string('oficio_licencia_uso_suelo')->change();
            $table->string('extension_licencia_uso_suelo')->change();
            $table->string('oficio_impacto_ambiental')->change();
            $table->string('extension_impacto_ambiental')->change();
            $table->string('numeros_certificados_catastro')->change();
            $table->string('periodo_emision')->change();
            $table->string('extension_catastro')->change();
            $table->string('oficio_cfe_factibilidad')->change();
            $table->string('descripcion_factibilidad_cfe')->change();
            $table->string('oficios_ooapas_factibilidad')->change();
            $table->string('periodo_emision_factibilidad')->change();
            $table->string('numero_viviendas_oficio_factibilidad_ooapas')->change();
            $table->string('descripcion_oficio_factibilidad_ooapas')->change();
            $table->string('oficio_ooapas_rasantes')->change();
            $table->string('oficios_sct')->change();
            $table->string('periodo_emision_oficios_sct')->change();
            $table->string('descripcion_oficio_sct')->change();
            $table->string('dependencia_ductos')->change();
            $table->string('oficios_dependencia_ductos')->change();
            $table->string('periodo_emision_oficios_dependencia_ductos')->change();
            $table->string('descripcion_oficios_dependencia_ductos')->change();
            $table->string('oficio_sedum')->change();
            $table->string('descripcion_oficio_sedum')->change();
            $table->string('reporte_tecnico_proteccion_civil')->change();
            $table->string('oficio_reporte_tecnico_proteccion_civil')->change();
            $table->string('periodo_oficio_reporte_tecnico_proteccion_civil')->change();
            $table->string('reporte_municipal_desarrollo_urbano')->change();
            $table->string('oficio_reporte_municipal_desarrollo_urbano')->change();
            $table->string('oficio_direccion_patrimonio_municipal')->change();
            $table->string('acuerdos_entrega_sedum')->change();
            $table->string('director_desarrollo_urbano')->change();
            $table->string('jefe_departamento')->change();
        });
    }
};
