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
            $table->text('extension_superficial')->nullable()->change();
            $table->text('parcelas')->nullable()->change();
            $table->text('escrituras_publicas')->nullable()->change();
            $table->text('numeros_registros_publicos')->nullable()->change();
            $table->text('superficie_escrituras_publicas')->nullable()->change();
            $table->text('escritura_legal_empresa')->nullable()->change();
            $table->text('folio_mercantil')->nullable()->change();
            $table->date('fecha_inscripcion_mercantil')->nullable()->change();
            $table->text('oficio_fusion_subdivision')->nullable()->change();
            $table->date('fecha_fusion_subdivision')->nullable()->change();
            $table->text('numeros_certificado_no_adeudo')->nullable()->change();
            $table->text('recibos_pago_1')->nullable()->change();
            $table->date('fecha_recibos_pago_1')->nullable()->change();
            $table->text('recibos_pago_2')->nullable()->change();
            $table->date('fecha_recibos_pago_2')->nullable()->change();
            $table->text('oficio_licencia_uso_suelo')->nullable()->change();
            $table->date('fecha_licencia_uso_suelo')->nullable()->change();
            $table->text('extension_licencia_uso_suelo')->nullable()->change();
            $table->text('oficio_impacto_ambiental')->nullable()->change();
            $table->date('fecha_oficio_impacto_ambiental')->nullable()->change();
            $table->text('extension_impacto_ambiental')->nullable()->change();
            $table->text('numeros_certificados_catastro')->nullable()->change();
            $table->text('periodo_emision')->nullable()->change();
            $table->text('extension_catastro')->nullable()->change();
            $table->text('oficio_cfe_factibilidad')->nullable()->change();
            $table->date('fecha_oficio_cfe_factibilidad')->nullable()->change();
            $table->text('descripcion_factibilidad_cfe')->nullable()->change();
            $table->text('oficios_ooapas_factibilidad')->nullable()->change();
            $table->text('periodo_emision_factibilidad')->nullable()->change();
            $table->text('numero_viviendas_oficio_factibilidad_ooapas')->nullable()->change();
            $table->text('descripcion_oficio_factibilidad_ooapas')->nullable()->change();
            $table->text('oficio_ooapas_rasantes')->nullable()->change();
            $table->date('fecha_oficio_ooapas_rasantes')->nullable()->change();
            $table->text('oficios_sct')->nullable()->change();
            $table->text('periodo_emision_oficios_sct')->nullable()->change();
            $table->text('descripcion_oficio_sct')->nullable()->change();
            $table->text('dependencia_ductos')->nullable()->change();
            $table->text('oficios_dependencia_ductos')->nullable()->change();
            $table->text('periodo_emision_oficios_dependencia_ductos')->nullable()->change();
            $table->text('descripcion_oficios_dependencia_ductos')->nullable()->change();
            $table->text('oficio_sedum')->nullable()->change();
            $table->date('fecha_oficio_sedum')->nullable()->change();
            $table->text('descripcion_oficio_sedum')->nullable()->change();
            $table->text('reporte_tecnico_proteccion_civil')->nullable()->change();
            $table->text('oficio_reporte_tecnico_proteccion_civil')->nullable()->change();
            $table->text('periodo_oficio_reporte_tecnico_proteccion_civil')->nullable()->change();
            $table->text('reporte_municipal_desarrollo_urbano')->nullable()->change();
            $table->text('oficio_reporte_municipal_desarrollo_urbano')->nullable()->change();
            $table->date('fecha_oficio_reporte_municipal_desarrollo_urbano')->nullable()->change();
            $table->text('oficio_direccion_patrimonio_municipal')->nullable()->change();
            $table->date('fecha_oficio_direccion_patrimonio_municipal')->nullable()->change();
            $table->text('acuerdos_entrega_sedum')->nullable()->change();
            $table->text('director_desarrollo_urbano')->nullable()->change();
            $table->text('jefe_departamento')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('solicitud_visto_buenos', function (Blueprint $table) {
            //
            $table->text('extension_superficial')->change();
            $table->text('parcelas')->change();
            $table->text('escrituras_publicas')->change();
            $table->text('numeros_registros_publicos')->change();
            $table->text('superficie_escrituras_publicas')->change();
            $table->text('escritura_legal_empresa')->change();
            $table->text('folio_mercantil')->change();
            $table->date('fecha_inscripcion_mercantil')->change();
            $table->text('oficio_fusion_subdivision')->change();
            $table->date('fecha_fusion_subdivision')->change();
            $table->text('numeros_certificado_no_adeudo')->change();
            $table->text('recibos_pago_1')->change();
            $table->date('fecha_recibos_pago_1')->change();
            $table->text('recibos_pago_2')->change();
            $table->date('fecha_recibos_pago_2')->change();
            $table->text('oficio_licencia_uso_suelo')->change();
            $table->date('fecha_licencia_uso_suelo')->change();
            $table->text('extension_licencia_uso_suelo')->change();
            $table->text('oficio_impacto_ambiental')->change();
            $table->date('fecha_oficio_impacto_ambiental')->change();
            $table->text('extension_impacto_ambiental')->change();
            $table->text('numeros_certificados_catastro')->change();
            $table->text('periodo_emision')->change();
            $table->text('extension_catastro')->change();
            $table->text('oficio_cfe_factibilidad')->change();
            $table->date('fecha_oficio_cfe_factibilidad')->change();
            $table->text('descripcion_factibilidad_cfe')->change();
            $table->text('oficios_ooapas_factibilidad')->change();
            $table->text('periodo_emision_factibilidad')->change();
            $table->text('numero_viviendas_oficio_factibilidad_ooapas')->change();
            $table->text('descripcion_oficio_factibilidad_ooapas')->change();
            $table->text('oficio_ooapas_rasantes')->change();
            $table->date('fecha_oficio_ooapas_rasantes')->change();
            $table->text('oficios_sct')->change();
            $table->text('periodo_emision_oficios_sct')->change();
            $table->text('descripcion_oficio_sct')->change();
            $table->text('dependencia_ductos')->change();
            $table->text('oficios_dependencia_ductos')->change();
            $table->text('periodo_emision_oficios_dependencia_ductos')->change();
            $table->text('descripcion_oficios_dependencia_ductos')->change();

        });
    }
};
