<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudVistoBueno extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_expediente', 'desarrollo_id', 'extension_superficial', 'parcelas', 
        'representante_legal_id', 'escrituras_publicas', 'numeros_registros_publicos', 
        'superficie_escrituras_publicas', 'escritura_legal_empresa', 'folio_mercantil',
        'fecha_inscripcion_mercantil', 'oficio_fusion_subdivision', 'fecha_fusion_subdivision',
        'numeros_certificado_no_adeudo', 'recibos_pago_1', 'fecha_recibos_pago_1', 
        'recibos_pago_2', 'fecha_recibos_pago_2', 'oficio_licencia_uso_suelo',
        'fecha_licencia_uso_suelo', 'extension_licencia_uso_suelo', 'oficio_impacto_ambiental',
        'fecha_oficio_impacto_ambiental', 'extension_impacto_ambiental', 'numeros_certificados_catastro',
        'periodo_emision', 'extension_catastro', 'oficio_cfe_factibilidad', 
        'fecha_oficio_cfe_factibilidad', 'descripcion_factibilidad_cfe', 'oficios_ooapas_factibilidad',
        'periodo_emision_factibilidad', 'numero_viviendas_oficio_factibilidad_ooapas',
        'descripcion_oficio_factibilidad_ooapas', 'oficio_ooapas_rasantes', 
        'fecha_oficio_ooapas_rasantes', 'oficios_sct', 'periodo_emision_oficios_sct',
        'descripcion_oficio_sct', 'dependencia_ductos', 'oficios_dependencia_ductos',
        'periodo_emision_oficios_dependencia_ductos', 'descripcion_oficios_dependencia_ductos',
        'oficio_sedum', 'fecha_oficio_sedum', 'descripcion_oficio_sedum',
        'reporte_tecnico_proteccion_civil', 'oficio_reporte_tecnico_proteccion_civil',
        'periodo_oficio_reporte_tecnico_proteccion_civil', 'reporte_municipal_desarrollo_urbano',
        'oficio_reporte_municipal_desarrollo_urbano', 'fecha_oficio_reporte_municipal_desarrollo_urbano',
        'oficio_direccion_patrimonio_municipal', 'fecha_oficio_direccion_patrimonio_municipal',
        'acuerdos_entrega_sedum', 'director_desarrollo_urbano', 'jefe_departamento'
    ];

    // 📌 Relación: Una solicitud pertenece a un desarrollo
    public function desarrollo()
    {
        return $this->belongsTo(Desarrollo::class);
    }

    // 📌 Relación: Una solicitud está vinculada a un representante legal
    public function representanteLegal()
    {
        return $this->belongsTo(ApoderadoLegal::class, 'representante_legal_id');
    }
}
