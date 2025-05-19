<div class="py-4">
    <div>
    <h2 class="text-xl font-semibold mb-4 text-center">Vista Previa del Documento</h2>
        <div class="bg-gray-50 p-4 border border-gray-300">
            <p>Morelia, Michoacán; a {{ $fecha_autorizacion ?? '(Fecha_Autorización)' }}.</p>
    
            <p>
                C. {{$propietario ?? '(Propietario)' }}<br>
                {{ $cargo ?? '(Cargo)'}} DE LA EMPRESA<br>
                “{{$empresa ?? '(Empresa)'}}” S.A. DE C.V.<br>
                {{$domicilio ?? '(Domicilio)'}}.<br>
                C I U D A D.-
            </p>
            <div class="text-justify">
                <p>
                    Visto para resolver el expediente número {{$expediente ?? '(Expediente)'}}, con motivo de la Autorización Definitiva para el desarrollo y establecimiento de un {{ $desarrollo ?? '(Desarrollo)' }}, denominado “{{$nombre ?? '(Nombre)'}}”, con una superficie de {{ $superficie ?? '(Superficie)' }}, ubicado en {{ $ubicacion ?? '(Ubicación)' }}, de este Municipio de Morelia, Michoacán de Ocampo; y,
                </p>
        
                <p class="text-center"><strong>C O N S I D E R A N D O:</strong></p>
        
                <p>1º.- Que la C. Arq. Claudia Carolina Soto Barcenas, en su carácter de Apoderada Legal de la Empresa “{{ $empresa ?? '(Empresa)' }}” S.A. DE C.V., propietaria del predio motivo del Desarrollo, solicitó a la Dirección de Orden Urbano, el Visto Bueno de Vialidad y Lotificación para el establecimiento de un {{ $desarrollo ?? '(Desarrollo)' }}, denominado “{{ $desarrollo ?? '(Desarrollo)' }}”, con una superficie de {{ $superficie ?? '(Superficie)' }}, ubicado en el domicilio antes señalado.</p>
        
                <p>2º.- Que la propiedad del inmueble, la acreditan mediante la escritura pública número {{ $no_escritura_propiedad ?? '(EscrituraPRO)' }}, de fecha {{ $fecha_autorizacion ?? '(Fecha_Autorización)' }}, pasada ante la fe del Lic. {{ $notario_propiedad ?? '(NotarioPROP)' }}, Notario Público Número {{$notaria_numero_propiedad ?? '(NoNotPRO)'}}, con ejercicio y residencia en esta ciudad, inscrita en el Registro Público de la Propiedad Raíz y de Comercio en el Estado, bajo el número (R_PROP), tomo (T_PROP), del Libro de Propiedad, correspondiente al Distrito de Morelia, Michoacán de Ocampo, con una superficie de {{ $superficie ?? '(Superficie)' }}.</p>
        
                <p>3º.- Que la empresa “{{ $empresa ?? '(Empresa)' }}” S.A. DE C.V., acredita su legal existencia mediante Escritura pública número (EscrituraAC), de fecha (FechaAC), otorgada por el Lic. (NotarioAC), Notario Público Número (NoNotAC), con ejercicio y residencia en esta ciudad, inscrita en el Registro Público de la Propiedad Raíz y del Comercio en el Estado de Michoacán de Ocampo, bajo el folio mercantil electrónico número (FolioAC).</p>
        
                <p>4º.- Que la empresa “{{ $empresa ?? '(Empresa)' }}” S.A. de C.V. otorgó poder general para (Poder), mediante escritura pública (EscrituraPODER), de fecha (FechaPODER), pasada ante la fe del Lic. (NotarioPODER), Notario Público número (NoNotPODER), con ejercicio y residencia en este distrito judicial de Morelia, Michoacán de Ocampo, a favor de la (Solicitante).</p>
        
                <p>5º.- Que la (Dependencia_LUS), mediante oficio número (Oficio_LUS), de fecha (Fecha_LUS), expidió (Docto_LUS), en los predios ubicados en {{ $ubicacion ?? '(Ubicación)' }}, en una extensión superficial de {{ $superficie ?? '(Superficie)' }}.</p>
        
                <p>6º.- Que la (DependenciaMIA), mediante expediente número (ExpMIA), y oficio número (OficioMIA) de fecha (FechaMIA), autorizó la Manifestación de Impacto Ambiental para el {{ $desarrollo ?? '(Desarrollo)' }} denominado extraoficialmente “(Nombre)”.</p>
        
                <p>7º.- Que la (DependenciaFACT), mediante oficio número (OficioFACT), de fecha (FechaFACT), otorgó factibilidad positiva para (Factibilidad).</p>
        
                <p>8º.- Que el (DependenciaVOBOA), mediante oficio número (OficioVOBOA) de fecha (FechaVOBOA), otorgó el visto bueno a la factibilidad emitida por la (DependenciaFACT), de fecha (FechaVOBOA).</p>
        
                <p>9º.- Que la (DependenciaCFE), con oficio número (OficioCFE) de fecha (FechaCFE), informa que si está en condiciones de proporcionar el servicio de energía eléctrica para el {{ $desarrollo ?? '(Desarrollo)' }} denominado extraoficialmente (Nombre).</p>
        
                <p>10º.- Que la (DependenciaPC), mediante oficio número (OficioPC), fecha (FechaPC) y mediante Reporte Técnico número (ReportePC), manifiesta que (PC), y fuera de lo anterior el predio no presenta ninguna peligrosidad de origen natural o antropogénico que pudieran amenazarlo, anexándose planos sellados por esta dependencia.</p>
        
                <p>11º.- Que según certificado y plano de medición y deslinde catastral, expedidos por la (DependenciaCATASTRO) del Gobierno del Estado de Michoacán de Ocampo, mediante oficio número (OficioCATASTRO), con expediente (ExpedienteCAT), el predio motivo del Conjunto Habitacional, cuenta con una superficie total de {{ $superficie ?? '(Superficie)' }}.</p>
        
                <p>12º.- Que la empresa representada por la (Solicitante), presentó el plano topográfico con una superficie de (SuperficieTOP).</p>
        
                <p>13º.- Que la Dirección de Orden Urbano, mediante oficio número (OficioVIAL), de fecha (FechaVIAL), otorgó el Visto Bueno a los Estudios de Impacto Urbano y Vial para un {{ $desarrollo ?? '(Desarrollo)' }}, en los predios identificados como {{ $ubicacion ?? '(Ubicación)' }}, de esta ciudad de Morelia, Michoacán de Ocampo.</p>
        
                <p>14º.- Que la (DependenciaSUST), mediante oficio número (OficioSUST), de fecha (FechaSUST), emitió el Dictamen de Sustentabilidad Ambiental condicionada al cumplimiento de la donación de (Sustentabilidad), para el Programa de Reforestación Municipal.</p>
        
                <p>15º.- Que la (DependenciaMOV), mediante oficio número (OficioMOV) y plano autorizado, ambos de fecha (FechaMOV), otorgó el Visto Bueno de Diseño de Infraestructura para la Movilidad Activa.</p>
        
                <p>16º.- Que la (DependenciaURBA), mediante oficio número (OficioURBA), de fecha (FechaURBA), otorgó Licencia de Obras de Urbanización para las vialidades denominadas oficialmente (LicUrba).</p>
        
                <p>17º.- Que la (DependenciaPM), mediante oficio número (OficioPM), de fecha (FechaPM), otorgó su opinión positiva respecto a la ubicación y aprovechamiento del área de donación municipal y el área verde municipal del Desarrollo.</p>
        
                <p>18º.- Que el predio motivo del desarrollo, con cuenta predial número (NoPredio), está al corriente del pago del Impuesto Predial, según lo acredita con el recibo de pago número (ReciboPredial), referencia (Referencia), de fecha (FechaPredial), expedido por la Tesorería Municipal de Morelia.</p>
        
                <p>19º.- Que según se acreditó con recibo de pago número (ReciboRevisión), de fecha (FechaRevisión), se realizó el pago por concepto de Revisión de Proyecto o Anteproyecto, Visto Bueno al Proyecto Arquitectónico y el Visto Bueno al Condominio para (ParaRevisión).</p>
        
                <p>20º.- Que la C. (DRO), acredita su profesión mediante número de Cédula Profesional (Cédula), con efectos de Patente para Ejercer la Profesión de (Profesión); y que se encuentra registrado en la Secretaría de Desarrollo Urbano y Movilidad bajo el número (RegistroDRO1).</p>
        
                <p>21º.- Que la empresa “{{ $empresa ?? '(Empresa)' }}” S.A. DE C.V., propietaria del predio motivo del Desarrollo, justificó técnica y jurídicamente la petición que manifiestan en su solicitud.</p>
        
                <p class="text-center"><strong>R  E  S  O  L  U  C  I  Ó  N :</strong></p>
        
                <p>PRIMERO.- Queda plenamente probada la competencia de esta Autoridad Municipal.</p>
        
                <p>SEGUNDO.- Es de Autorizarse y se Autoriza el Visto Bueno de Vialidad y Lotificación para el establecimiento de un {{ $desarrollo ?? '(Desarrollo)' }}, denominado extraoficialmente “(Nombre)”, ubicado en {{ $ubicacion ?? '(Ubicación)' }}, de esta ciudad de Morelia, Michoacán de Ocampo, en una extensión superficial de {{ $superficie ?? '(Superficie)' }}, propiedad de la empresa denominada “{{ $empresa ?? '(Empresa)' }}” S.A. de C.V.</p>
        
                <p>TERCERO.- Previo a la Autorización Definitiva la C. (Solicitante), (Carácter) de la empresa denominada “{{ $empresa ?? '(Empresa)' }}” S.A. de C.V., deberán entregar los requisitos establecidos en el Código de Desarrollo Urbano del Estado de Michoacán de Ocampo.</p>
                <br>
                <p class="text-center">A T E N T A M E N T E</p>
                <br>
                <p class="text-center">____________________________________<br>DRA. JOANNA MARGARITA MORENO<br>SECRETARIA DE DESARROLLO URBANO Y MOVILIDAD</p>
    
            </div>
        </div>
    </div>

</div>