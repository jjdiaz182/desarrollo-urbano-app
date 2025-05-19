<?php

namespace App\Livewire;

use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class FormInput extends Component
{


    // Datos Generales
    public $fecha_autorizacion, $propietario, $cargo, $empresa, $domicilio, $expediente, $folio_solicitud, $desarrollo, $nombre, $ubicacion, $superficie;

    // Escritura de Propiedad
    public $notario_propiedad, $notaria_numero_propiedad, $no_escritura_propiedad, $fecha_escritura_propiedad, $registro_numero, $tomo_numero, $cuenta_predial, $recibo_pago_predial, $referencia_pago, $fecha_pago;

    // Escritura Constitutiva
    public $notario_constitutiva, $notaria_numero_constitutiva, $no_escritura_constitutiva, $fecha_escritura_constitutiva, $folio_mercantil;

    // Escritura Apoderado Legal
    public $notario_apoderado, $notaria_numero_apoderado, $no_escritura_apoderado, $fecha_escritura_apoderado, $solicitante_apoderado, $caracter, $poder_para;

    // Licencia de Uso del Suelo
    public $oficio_numero_uso_suelo, $fecha_uso_suelo, $otorgado_por, $documento_uso_suelo;

    // Manifestación de Impacto Ambiental
    public $expediente_impacto_ambiental, $oficio_numero_impacto_ambiental, $fecha_impacto_ambiental;

    // Factibilidad de Agua Potable
    public $dependencia_agua, $oficio_numero_agua, $fecha_agua, $factibilidad_para_agua;

    // Visto Bueno Factibilidad por OOAPAS
    public $dependencia_ooapas, $oficio_numero_ooapas, $fecha_ooapas, $factibilidad_para_ooapas;

    // Factibilidad de CFE
    public $dependencia_cfe, $oficio_numero_cfe, $fecha_cfe, $para_el_cfe, $superficie_cfe;

    // Protección Civil
    public $dependencia_pc, $oficio_numero_pc, $fecha_pc, $reporte_tecnico_pc, $manifiesta_que_pc;

    // Medición y Deslinde Catastral
    public $dependencia_catastro, $oficio_numero_catastro, $fecha_catastro, $expediente_numero_catastro, $superficie_catastro;

    // Plano Topográfico
    public $superficie_topografico;

    // Impacto Urbano y Vial
    public $oficio_numero_urbano, $fecha_urbano;

    // Dictamen de Sustentabilidad
    public $dependencia_sustentabilidad, $oficio_numero_sustentabilidad, $fecha_sustentabilidad, $donacion_sustentabilidad;

    // Movilidad Sustentable
    public $dependencia_movilidad, $oficio_numero_movilidad, $fecha_movilidad;

    // Licencia de Obras de Urbanización
    public $dependencia_obras, $oficio_numero_obras, $fecha_obras, $para_las_vialidades;

    // Patrimonio Municipal
    public $dependencia_patrimonio, $oficio_numero_patrimonio, $fecha_patrimonio, $correspondiente_a_patrimonio;

    // Revisión de Proyectos para VoBo
    public $recibo_pago_vobo, $fecha_vobo, $para_vobo;

    // Director Responsable de Obra
    public $dro, $cedula_dro, $profesion_dro, $drodo;

    // Director Responsable de Obra de Urbanización
    public $drou, $cedula_drou, $profesion_drou, $drodu;



    public function render()
    {
        return view('livewire.form-input');
    }

    public function updatedFechaAutorizacion()
    {
        //dd($this->fecha_autorizacion);
        // Emitir el evento 'fechaAutorizacionUpdated' con el valor actualizado
        $this->dispatch('fechaAutorizacionUpdated', fecha_autorizacion: $this->fecha_autorizacion);
        
    }

    public function downloadPDF(){
        // Crear una vista Blade que será el contenido del PDF
   
        dd($this->fecha_autorizacion);
        $pdf = PDF::loadView('livewire.form-visualization');

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, 'documento.pdf');
    }
}
