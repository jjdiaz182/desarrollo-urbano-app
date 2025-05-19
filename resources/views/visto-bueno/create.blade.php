<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Solicitud de Visto bueno') }}
        </h2>
    </x-slot>

    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg ">
                <div class="px-4">
                    <div class="bg-white my-4 mx-4">
                       
                        <div>
                            
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
                                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                                    <h1 class="text-2xl font-semibold mb-4">Nueva Solicitud de Visto Bueno para {{ $desarrollo->alias }}</h1>
                            
                                    <div x-data="{ 
                                            numero_expediente: '', extension_superficial: '', parcelas: '', representante: '',
                                            escrituras_publicas: '', numeros_registros_publicos: '', superficie_escrituras_publicas: '',
                                            escritura_legal: '', folio_mercantil: '', fecha_inscripcion_mercantil: '',
                                            oficio_fusion_subdivision: '', fecha_fusion_subdivision: '',
                                            numeros_certificado_no_adeudo: '', recibos_pago_1: '', fecha_recibos_pago_1: '',
                                            recibos_pago_2: '', fecha_recibos_pago_2: '',
                                            oficio_licencia_uso_suelo: '',
                                            fecha_licencia_uso_suelo: '',
                                            extension_licencia_uso_suelo: '',
                                            oficio_impacto_ambiental: '',
                                            fecha_oficio_impacto_ambiental: '',
                                            extension_impacto_ambiental: '',
                                            numeros_certificados_catastro: '',
                                            periodo_emision: '',
                                            extension_catastro: '',
                                            oficio_cfe_factibilidad: '',
                                            fecha_oficio_cfe_factibilidad: '',
                                            descripcion_factibilidad_cfe: '',
                                            oficios_ooapas_factibilidad: '',
                                            periodo_emision_factibilidad: '',
                                            numero_viviendas_oficio_factibilidad_ooapas: '',
                                            descripcion_oficio_factibilidad_ooapas: '',
                                            oficio_ooapas_rasantes: '',
                                            fecha_oficio_ooapas_rasantes: '',
                                            oficios_sct: '',
                                            periodo_emision_oficios_sct: '',
                                            descripcion_oficio_sct: '',
                                            dependencia_ductos: '',
                                            oficios_dependencia_ductos: '',
                                            periodo_emision_oficios_dependencia_ductos: '',
                                            descripcion_oficios_dependencia_ductos: '',
                                            oficio_sedum: '',
                                            fecha_oficio_sedum: '',
                                            descripcion_oficio_sedum: '',
                                            reporte_tecnico_proteccion_civil: '',
                                            oficio_reporte_tecnico_proteccion_civil: '',
                                            periodo_oficio_reporte_tecnico_proteccion_civil: '',
                                            reporte_municipal_desarrollo_urbano: '',
                                            oficio_reporte_municipal_desarrollo_urbano: '',
                                            fecha_oficio_reporte_municipal_desarrollo_urbano: '',
                                            oficio_direccion_patrimonio_municipal: '',
                                            fecha_oficio_direccion_patrimonio_municipal: '',
                                            acuerdos_entrega_sedum: '',
                                            director_desarrollo_urbano: '',
                                            jefe_departamento: '',
                                            fusion: true, impuestos: true, uso_suelo: true, impacto_ambiental: true, catastro: true,
                                            cfe: true, ooapas: true, ooapas_rasantes: true, sct: true, gasoducto: true, sedum: true,
                                            proteccion_civil: true, des_urb_mun: true, rep_mun: true,
                                        }" 
                                        class="grid grid-cols-2 gap-6">
                            
                                        <!-- 📄 FORMULARIO IZQUIERDA -->
                                        <div>
                                            <form action="{{ route('visto-bueno.store', $desarrollo->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                            
                                                <!-- 📌 Generales -->
                                                <h2 class="text-lg font-semibold mb-2">Generales</h2>
                                                <div class="grid grid-cols-2 gap-4 mb-4">
                                                    <div>
                                                        <label class="block font-medium text-gray-700">Número de Expediente</label>
                                                        <input type="text" name="numero_expediente" x-model="numero_expediente"
                                                            class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                    </div>
                                                    <div>
                                                        <label class="block font-medium text-gray-700">Extensión Superficial</label>
                                                        <input type="text" name="extension_superficial" x-model="extension_superficial"
                                                            class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label class="block font-medium text-gray-700">Parcelas</label>
                                                        <textarea rows="4" name="parcelas" x-model="parcelas"
                                                            class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300"></textarea>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label class="block font-medium text-gray-700">Representante Legal</label>
                                                        <select name="representante_legal_id" x-model="representante"
                                                            class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                            <option value="">Seleccione</option>
                                                            @foreach ($representantes as $representante)
                                                                <option value="{{ $representante->id }}">{{ $representante->prefijo. ' '. $representante->nombre  }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label class="block font-medium text-gray-700">Escrituras públicas</label>
                                                        <textarea rows="4" name="escrituras_publicas" x-model="escrituras_publicas"
                                                            class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300"></textarea>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label class="block font-medium text-gray-700">Numeros de registros públicos</label>
                                                        <textarea rows="4" name="numeros_registros_publicos" x-model="numeros_registros_publicos"
                                                            class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300"></textarea>
                                                    </div>
                                                    <div>
                                                        <label class="block font-medium text-gray-700">Superficie de escrituras publicas </label>
                                                        <input type="text" name="superficie_escrituras_publicas" x-model="superficie_escrituras_publicas"
                                                            class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                    </div>

                                                    <div>
                                                        <label class="block font-medium text-gray-700">Escritura legal empresa </label>
                                                        <input type="text" name="escritura_legal_empresa" x-model="escritura_legal_empresa"
                                                            class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                    </div>
                                                    <div>
                                                        <label class="block font-medium text-gray-700">Folio Mercantil</label>
                                                        <input type="text" name="folio_mercantil" x-model="folio_mercantil"
                                                            class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                    </div>
                                                    <div>
                                                        <label class="block font-medium text-gray-700">Fecha inscripcion mercantil</label>
                                                        <input type="date" name="fecha_inscripcion_mercantil" x-model="fecha_inscripcion_mercantil"
                                                            class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                    </div>
                                                </div>
                            
                                                <!-- 📌 Fusión y Subdivisión -->
                                                <div x-data="{ fusion: true }" class="mb-4">
                                                    <div class="flex items-center mb-2">
                                                        <input type="checkbox" id="fusion_check" x-model="fusion" checked class="mr-2">
                                                        <label for="fusion_check" class="text-lg font-semibold">Fusión y Subdivisión</label>
                                                    </div>
                                                    <div x-show="fusion" class="grid grid-cols-2 gap-4">
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Oficio</label>
                                                            <input type="text" name="oficio_fusion_subdivision" x-model="oficio_fusion_subdivision"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Fecha</label>
                                                            <input type="date" name="fecha_fusion_subdivision" x-model="fecha_fusion_subdivision"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                    </div>
                                                </div>
                            
                                                <!-- 📌 Impuestos Prediales -->
                                                <div x-data="{ impuestos: true }" class="mb-4">
                                                    <div class="flex items-center mb-2">
                                                        <input type="checkbox" id="impuestos_check" x-model="impuestos" checked class="mr-2">
                                                        <label for="impuestos_check" class="text-lg font-semibold">Impuestos Prediales</label>
                                                    </div>
                                                    <div x-show="impuestos" class="grid grid-cols-2 gap-4">
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Números de Certificado No Adeudo</label>
                                                            <input type="text" name="numeros_certificado_no_adeudo" x-model="numeros_certificado_no_adeudo"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Recibo de Pago 1</label>
                                                            <input type="text" name="recibos_pago_1" x-model="recibos_pago_1"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Fecha Recibo de Pago 1</label>
                                                            <input type="date" name="fecha_recibos_pago_1" x-model="fecha_recibos_pago_1"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Recibo de Pago 2</label>
                                                            <input type="text" name="recibos_pago_2" x-model="recibos_pago_2"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- 📌 Licencia Uso de Suelo -->
                                                <div x-data="{ uso_suelo: true }" class="mb-4">
                                                    <div class="flex items-center mb-2">
                                                        <input type="checkbox" id="uso_suelo_check" x-model="uso_suelo" checked class="mr-2">
                                                        <label for="uso_suelon_check" class="text-lg font-semibold">Licencia Uso de suelo</label>
                                                    </div>
                                                    <div x-show="uso_suelo" class="grid grid-cols-2 gap-4">
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Oficio</label>
                                                            <input type="text" name="oficio_licencia_uso_suelo" x-model="oficio_licencia_uso_suelo"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Fecha</label>
                                                            <input type="date" name="fecha_licencia_uso_suelo" x-model="fecha_licencia_uso_suelo"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Extensión</label>
                                                            <input type="text" name="extension_licencia_uso_suelo" x-model="extension_licencia_uso_suelo"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 📌 Impacto ambiental -->
                                                <div x-data="{ impacto_ambiental: true }" class="mb-4">
                                                    <div class="flex items-center mb-2">
                                                        <input type="checkbox" id="impacto_ambiental_check" x-model="impacto_ambiental" checked class="mr-2">
                                                        <label for="impacto_ambiental_check" class="text-lg font-semibold">Impacto Ambiental</label>
                                                    </div>
                                                    <div x-show="impacto_ambiental" class="grid grid-cols-2 gap-4">
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Oficio</label>
                                                            <input type="text" name="oficio_impacto_ambiental" x-model="oficio_impacto_ambiental"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Fecha</label>
                                                            <input type="date" name="fecha_oficio_impacto_ambiental" x-model="fecha_oficio_impacto_ambiental"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Extensión</label>
                                                            <input type="text" name="extension_impacto_ambiental" x-model="extension_impacto_ambiental"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                    </div>
                                                </div>

                                                 <!-- 📌 Catastro -->
                                                 <div x-data="{ catastro: true }" class="mb-4">
                                                    <div class="flex items-center mb-2">
                                                        <input type="checkbox" id="catastro_check" x-model="catastro" checked class="mr-2">
                                                        <label for="catastro_check" class="text-lg font-semibold">Dirección de Catastro</label>
                                                    </div>
                                                    <div x-show="catastro" class="grid grid-cols-2 gap-4">
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Certificados</label>
                                                            <input type="text" name="numeros_certificados_catastro" x-model="numeros_certificados_catastro"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Periodo emisión</label>
                                                            <input type="text" name="periodo_emision" x-model="periodo_emision"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Extensión</label>
                                                            <input type="text" name="extension_catastro" x-model="extension_catastro"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- 📌 CFE -->
                                                <div x-data="{ cfe: true }" class="mb-4">
                                                    <div class="flex items-center mb-2">
                                                        <input type="checkbox" id="cfe_check" x-model="cfe" checked class="mr-2">
                                                        <label for="cfe_check" class="text-lg font-semibold">CFE</label>
                                                    </div>
                                                    <div x-show="cfe" class="grid grid-cols-2 gap-4">
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Oficio</label>
                                                            <input type="text" name="oficio_cfe_factibilidad" x-model="oficio_cfe_factibilidad"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Fecha Oficio Factibilidad CFE</label>
                                                            <input type="date" name="fecha_oficio_cfe_factibilidad" x-model="fecha_oficio_cfe_factibilidad"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div class="col-span-2">
                                                            <label class="block font-medium text-gray-700">Descripción Factibilidad CFE</label>
                                                            <textarea rows=3 name="descripcion_factibilidad_cfe" x-model="descripcion_factibilidad_cfe"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 📌 OOAPAS -->
                                                <div x-data="{ ooapas: true }" class="mb-4">
                                                    <div class="flex items-center mb-2">
                                                        <input type="checkbox" id="ooapas_check" x-model="ooapas" checked class="mr-2">
                                                        <label for="ooapas_check" class="text-lg font-semibold">OOAPAS</label>
                                                    </div>
                                                    <div x-show="ooapas" class="grid grid-cols-2 gap-4">
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Oficio</label>
                                                            <input type="text" name="oficios_ooapas_factibilidad" x-model="oficios_ooapas_factibilidad"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Periodo Factibilidad OOAPAS</label>
                                                            <input type="text" name="periodo_emision_factibilidad" x-model="periodo_emision_factibilidad"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Numero Viviendas en Oficio</label>
                                                            <input type="text" name="numero_viviendas_oficio_factibilidad_ooapas" x-model="numero_viviendas_oficio_factibilidad_ooapas"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div class="col-span-2">
                                                            <label class="block font-medium text-gray-700">Descripción Factibilidad OOAPAS</label>
                                                            <textarea rows=3 name="descripcion_oficio_factibilidad_ooapas" x-model="descripcion_oficio_factibilidad_ooapas"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 📌 OOAPAS RASANTES -->
                                                <div x-data="{ ooapas_rasantes: true }" class="mb-4">
                                                    <div class="flex items-center mb-2">
                                                        <input type="checkbox" id="ooapas_rasantes_check" x-model="ooapas_rasantes" checked class="mr-2">
                                                        <label for="ooapas_rasantes_check" class="text-lg font-semibold">OOAPAS Proyecto Rasantes:</label>
                                                    </div>
                                                    <div x-show="ooapas_rasantes" class="grid grid-cols-2 gap-4">
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Oficio OOAPAS rasantes </label>
                                                            <input type="text" name="oficio_ooapas_rasantes" x-model="oficio_ooapas_rasantes"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Fecha Oficio </label>
                                                            <input type="date" name="fecha_oficio_ooapas_rasantes" x-model="fecha_oficio_ooapas_rasantes"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                                <!-- 📌 SCT -->
                                                <div x-data="{ sct: true }" class="mb-4">
                                                    <div class="flex items-center mb-2">
                                                        <input type="checkbox" id="sct_check" x-model="sct" checked class="mr-2">
                                                        <label for="sct_check" class="text-lg font-semibold">SCT:</label>
                                                    </div>
                                                    <div x-show="sct" class="grid grid-cols-2 gap-4">
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Oficio SCT </label>
                                                            <input type="text" name="oficios_sct" x-model="oficios_sct"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Periodo emisión SCT</label>
                                                            <input type="text" name="periodo_emision_oficios_sct" x-model="periodo_emision_oficios_sct"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        
                                                        <div class="col-span-2">
                                                            <label class="block font-medium text-gray-700">Descripción Oficio SCT</label>
                                                            <textarea rows=3 name="descripcion_oficio_sct" x-model="descripcion_oficio_sct"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 📌 SCT -->
                                                <div x-data="{ gasoducto: true }" class="mb-4">
                                                    <div class="flex items-center mb-2">
                                                        <input type="checkbox" id="gasoducto_check" x-model="gasoducto" checked class="mr-2">
                                                        <label for="gasoducto_check" class="text-lg font-semibold">GASODUCTOS:</label>
                                                    </div>
                                                    <div x-show="gasoducto" class="grid grid-cols-2 gap-4">
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Nombre Dependencia: </label>
                                                            <input type="text" name="dependencia_ductos" x-model="dependencia_ductos"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Oficios: </label>
                                                            <input type="text" name="oficios_dependencia_ductos" x-model="oficios_dependencia_ductos"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Periodo emisión:</label>
                                                            <input type="text" name="periodo_emision_oficios_dependencia_ductos" x-model="periodo_emision_oficios_dependencia_ductos"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        
                                                        <div class="col-span-2">
                                                            <label class="block font-medium text-gray-700">Descripción Oficio:</label>
                                                            <textarea rows=3 name="descripcion_oficios_dependencia_ductos" x-model="descripcion_oficios_dependencia_ductos"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 📌 SEDUM -->
                                                <div x-data="{ sedum: true }" class="mb-4">
                                                    <div class="flex items-center mb-2">
                                                        <input type="checkbox" id="sedum_check" x-model="sedum" checked class="mr-2">
                                                        <label for="sedum_check" class="text-lg font-semibold">SEDUM:</label>
                                                    </div>
                                                    <div x-show="sedum" class="grid grid-cols-2 gap-4">
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Oficio SEDUM: </label>
                                                            <input type="text" name="oficio_sedum" x-model="oficio_sedum"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Fecha Oficio: </label>
                                                            <input type="date" name="fecha_oficio_sedum" x-model="fecha_oficio_sedum"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        
                                                        <div class="col-span-2">
                                                            <label class="block font-medium text-gray-700">Descripción Oficio:</label>
                                                            <textarea rows=3 name="descripcion_oficio_sedum" x-model="descripcion_oficio_sedum"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 📌 Proteccion Civil -->
                                                <div x-data="{ proteccion_civil: true }" class="mb-4">
                                                    <div class="flex items-center mb-2">
                                                        <input type="checkbox" id="proteccion_civil_check" x-model="proteccion_civil" checked class="mr-2">
                                                        <label for="proteccion_civil_check" class="text-lg font-semibold">Protección Civil:</label>
                                                    </div>
                                                    <div x-show="proteccion_civil" class="grid grid-cols-2 gap-4">
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Oficio Reporte Técnico: </label>
                                                            <input type="text" name="oficio_reporte_tecnico_proteccion_civil" x-model="oficio_reporte_tecnico_proteccion_civil"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Periodo Oficio Reporte Técnico:   </label>
                                                            <input type="text" name="periodo_oficio_reporte_tecnico_proteccion_civil" x-model="periodo_oficio_reporte_tecnico_proteccion_civil"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        
                                                        <div class="col-span-2">
                                                            <label class="block font-medium text-gray-700">Reporte Técnico:</label>
                                                            <textarea rows=3 name="reporte_tecnico_proteccion_civil" x-model="reporte_tecnico_proteccion_civil"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 📌 DESARROLLO URBANO MUNICIPAL -->
                                                <div x-data="{ des_urb_mun: true }" class="mb-4">
                                                    <div class="flex items-center mb-2">
                                                        <input type="checkbox" id="des_urb_mun_check" x-model="des_urb_mun" checked class="mr-2">
                                                        <label for="des_urb_mun_check" class="text-lg font-semibold">Desarrollo Urbano Municipal:</label>
                                                    </div>
                                                    <div x-show="des_urb_mun" class="grid grid-cols-2 gap-4">
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Oficio Reporte Municipal: </label>
                                                            <input type="text" name="oficio_reporte_municipal_desarrollo_urbano" x-model="oficio_reporte_municipal_desarrollo_urbano"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Periodo Oficio Reporte Municipal:   </label>
                                                            <input type="date" name="fecha_oficio_reporte_municipal_desarrollo_urbano" x-model="fecha_oficio_reporte_municipal_desarrollo_urbano"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        
                                                        <div class="col-span-2">
                                                            <label class="block font-medium text-gray-700">Reporte Municipal Desarrollo Urbano:</label>
                                                            <textarea rows=3 name="reporte_municipal_desarrollo_urbano" x-model="reporte_municipal_desarrollo_urbano"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 📌 Reporte Municipal -->
                                                <div x-data="{ rep_mun: true }" class="mb-4">
                                                    <div class="flex items-center mb-2">
                                                        <input type="checkbox" id="rep_mun_check" x-model="rep_mun" checked class="mr-2">
                                                        <label for="rep_mun_check" class="text-lg font-semibold">Reporte Patrimonio Municipal:</label>
                                                    </div>
                                                    <div x-show="rep_mun" class="grid grid-cols-2 gap-4">
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Oficio Reporte Municipal: </label>
                                                            <input type="text" name="oficio_direccion_patrimonio_municipal" x-model="oficio_direccion_patrimonio_municipal"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Periodo Oficio Reporte Municipal:   </label>
                                                            <input type="date" name="fecha_oficio_direccion_patrimonio_municipal" x-model="fecha_oficio_direccion_patrimonio_municipal"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                                <!-- 📌 Datos SEDUM -->
                                                <div class="mb-4">
                                                    <div class="flex items-center mb-2">
                                                        <label class="text-lg font-semibold">Datos SEDUM:</label>
                                                    </div>
                                                    <div  class="grid grid-cols-1 gap-4">
                                                        <div>
                                                            <label class="block font-medium text-gray-700">Acuerdos Entrega : </label>
                                                            <input type="text" name="acuerdos_entrega_sedum" x-model="acuerdos_entrega_sedum"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700"> Director de Desarrollo Urbano : </label>
                                                            <input type="text" name="director_desarrollo_urbano" x-model="director_desarrollo_urbano"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>
                                                        <div>
                                                            <label class="block font-medium text-gray-700"> Jefe de Departamento: </label>
                                                            <input type="text" name="jefe_departamento" x-model="jefe_departamento"
                                                                class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                        </div>

                                                        
                                                    </div>
                                                </div>
                                                




                                                <div class="mt-6">
                                                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                                        Guardar
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                            
                                        <!-- 📜 TEXTO DERECHA (Vista Previa en Tiempo Real) -->
                                        <div class="bg-gray-100 p-6 rounded-md">
                                            <h2 class="text-xl font-semibold mb-4">Vista Previa</h2>

                                            <p class="text-gray-600 text-left">
                                                <span x-text="representante"></span>
                                                
                                            </p>
                                            <p class="text-gray-600 text-left">
                                                APODERADO LEGAL DE LA EMPRESA
                                                <br>{{$desarrollo->empresa->nombre}}
                                                <br>{{$desarrollo->empresa->calle .' '. $desarrollo->empresa->colonia .' '. $desarrollo->empresa->codigo_postal .' '. $desarrollo->empresa->ciudad .' '. $desarrollo->empresa->estado}}
                                            </p>
                                            <p class="mt-4 text-gray-600 text-justify">
                                                Visto para resolver el expediente número <span x-text="numero_expediente"></span>, 
                                                integrado con motivo del Visto Bueno del Proyecto de Vialidad y Lotificación 
                                                respecto del {{$desarrollo->nombre}}, 
                                                denominado extraoficialmente “{{$desarrollo->alias}}”, con una extensión superficial de 
                                                <span x-text="extension_superficial"></span>, 
                                                formada por las parcelas <span x-text="parcelas"></span>
                                            </p>
                                            <p class="my-4 text-gray-900 text-center">
                                                <b>
                                                    C  O  N  S  I  D  E  R  A  N  D  O :
                                                </b>
                                            </p>

                                            <p class="my-2 text-gray-600 text-justify">
                                                1º Que el <span x-text="representante"></span>, Apoderado Legal de la Empresa denominada
                                                {{$desarrollo->empresa->nombre}}
                                                solicitó a esta Secretaría de Desarrollo Urbano y Medio Ambiente Municipal, 
                                                el Visto Bueno al Proyecto de Vialidad y Lotificación del {{$desarrollo->nombre}},  
                                                denominado extraoficialmente “{{$desarrollo->alias}}”.

                                            </p>

                                            <p class="my-2 text-gray-600 text-justify">
                                                2º Que el solicitante acredita la propiedad del inmueble, mediante las Escrituras Públicas números: 
                                                <span x-text="escrituras_publicas"></span>
                                                inscritas en el Registro Público de la Propiedad Raíz y de Comercio en el Estado de Michoacán de Ocampo, bajo los números:
                                                <span x-text="numeros_registros_publicos"></span>
                                                del Libro de Propiedad correspondiente al Distrito de Morelia, con una superficie total de
                                                <span x-text="superficie_escrituras_publicas"></span>

                                            </p>
                                            <p class="my-2 text-gray-600 text-justify">
                                                3° Que la Empresa {{$desarrollo->empresa->nombre}}, 
                                                acreditó su legal existencia mediante escritura número <span x-text="escritura_legal"></span>,
                                                 inscrita en el Registro Público de la Propiedad Raíz y de Comercio en el Estado de Michoacán de Ocampo,
                                                 bajo el folio mercantil electrónico número <span x-text="folio_mercantil"></span>, de fecha 
                                                 <span x-text="fecha_inscripcion_mercantil"></span>.
                                            </p>
                                            <p class="my-2 text-gray-600 text-justify">
                                                4º Que con oficio número <span x-text="oficio_fusion_subdivision"></span> de fecha <span x-text="fecha_fusion_subdivision"></span>,
                                                 esta Secretaría de Desarrollo Urbano y Medio Ambiente, autorizó la Fusión y Subdivisión
                                                  de los predios motivo del desarrollo.
                                            </p>
                                            <p class="my-2 text-gray-600 text-justify">
                                                5º Que los predios motivo del desarrollo están al corriente en el pago del Impuesto Predial,
                                                 según se acredita con los Certificados de No Adeudo, números <span x-text="numeros_certificado_no_adeudo"></span>, 
                                                 así como los recibos con números del <span x-text="recibos_pago_1"></span>, 
                                                 de fecha <span x-text="fecha_recibos_pago_1"></span> y <span x-text="recibos_pago_2"></span>, 
                                                 de fecha <span x-text="fecha_recibos_pago_2"></span>, todos expedidos por la Tesorería Municipal de Morelia.
                                            </p>
                                            <p class="my-2 text-gray-600 text-justify">
                                                6º Que mediante oficio número <span x-text="oficio_licencia_uso_suelo"></span>, 
                                                de fecha <span x-text="fecha_licencia_uso_suelo"></span>, 
                                                esta Secretaría de Desarrollo Urbano y Medio Ambiente expidió el Licencia Condicionada con Uso del Suelo Habitacional, 
                                                para el desarrollo de un {{$desarrollo->nombre}}, 
                                                y una extensión superficial en conjunto de <span x-text="extension_licencia_uso_suelo"></span>.
                                            </p>
                                            <p class="my-2 text-gray-600 text-justify">
                                                7° Que la Secretaría de Urbanismo y Medio Ambiente de Gobierno del Estado de Michoacán de Ocampo, 
                                                mediante oficio número <span x-text="oficio_impacto_ambiental"></span>, 
                                                de fecha <span x-text="fecha_oficio_impacto_ambiental"></span>, autorizó en Materia de Impacto Ambiental
                                                el proyecto para la construcción y operación del Desarrollo Habitacional Tipo Popular de densidad media,
                                                denominado extraoficialmente “{{$desarrollo->alias}}”, a favor de la empresa denominada {{$desarrollo->empresa->nombre}}, 
                                                en una extensión superficial de <span x-text="extension_impacto_ambiental"></span>.  
                                            </p>

                                            <p class="my-2 text-gray-600 text-justify">
                                                8º Que según Certificados y Planos de Medición y Deslinde Catastral,
                                                emitidos por la Dirección de Catastro de Gobierno del Estado de Michoacán de Ocampo, 
                                                con números del <span x-text="numeros_certificados_catastro"></span>, 
                                                de fechas <span x-text="periodo_emision"></span>,
                                                los predios motivos del Conjunto Habitacional tienen una superficie analítica total de 
                                                <span x-text="extension_catastro"></span>.
                                            </p>

                                            <p class="my-2 text-gray-600 text-justify">
                                                9° Que la Comisión Federal de Electricidad, según oficio número <span x-text="oficio_cfe_factibilidad"></span>,
                                                 de fecha <span x-text="fecha_oficio_cfe_factibilidad"></span>, 
                                                expidió la factibilidad positiva para dotar del suministro de energía eléctrica al Conjunto Habitacional; 
                                                así mismo mediante oficios <span x-text="descripcion_factibilidad_cfe"></span>, 
                                               
                                            </p>

                                            <p class="my-2 text-gray-600 text-justify">
                                                10° Que el Organismo Operador de Agua Potable, Alcantarillado y Saneamiento de Morelia, mediante oficios números 
                                                <span x-text="oficios_ooapas_factibilidad"></span>, de fechas <span x-text="periodo_emision_factibilidad"></span>, 
                                                otorgó la factibilidad positiva para dotar de los servicios de Agua Potable, 
                                                Descarga de Drenaje Sanitario y Alcantarillado al Conjunto Habitacional en referencia, 
                                                para <span x-text="numero_viviendas_oficio_factibilidad_ooapas"></span> viviendas, condicionada a que los propietarios 
                                                proporcionen su propia fuente de abastecimiento, 
                                                considerando en el proyecto, líneas de conducción, tanques de regulación automatizados para tirante máximo y mínimo, 
                                                redes de distribución y tomas domiciliarias individuales; así como a implementar una planta de tratamiento al 
                                                Norte del Conjunto Habitacional y colindando con la zona Mintzita y carretera Cointzio -Tenencia Morelos, 
                                                considerando colector, red de atarjeas, descargas domiciliarias con tubería de PVC sanitario, tránsito pesado, 
                                                polietileno alta densidad o similar.
                                               
                                            </p>

                                            <p class="my-2 text-gray-600 text-justify">
                                                11° Que mediante oficio número <span x-text="oficio_ooapas_rasantes"></span>, de fecha 
                                                <span x-text="fecha_oficio_ooapas_rasantes"></span>, 
                                                el Organismo Operador de Agua Potable, Alcantarillado y Saneamiento de Morelia, 
                                                informa que, una vez revisado el Proyecto de Rasantes del desarrollo en referencia, 
                                                se determinó que cumple con la Normatividad que rige a ese Organismo.
                                               
                                            </p>

                                            <p class="my-2 text-gray-600 text-justify">
                                                12° Que la Secretaria de Comunicaciones y Transportes, mediante oficios <span x-text="oficios_sct"></span>, 
                                                de fechas <span x-text="periodo_emision_oficios_sct"></span>, 
                                                determinó el Derecho de Vía Federal de <span x-text="descripcion_oficio_sct"></span>.
                                               
                                            </p>

                                            <p class="my-2 text-gray-600 text-justify">
                                                13° Que <span x-text="dependencia_ductos"></span>, a través de la Superintendencia General de Ductos Salamanca, 
                                                mediante oficios <span x-text="oficios_dependencia_ductos"></span>, de fechas 
                                                <span x-text="periodo_emision_oficios_dependencia_ductos"></span>, determinó las siguientes restricciones para los asentamientos humanos, localizados cerca de los derechos de vía, así como las normas y medidas para cruzamientos que alojan los Ductos de esa Subsidiaria:
                                                <br> Contar con los permisos de obra de la Autoridad Competente en el Municipio.
                                                <br> Respetar los criterios de Desarrollo Urbano, publicados en el Diario Oficial de la Federación del 14 de agosto de 1990, que en su punto U.3, indica que: Cualquier uso habitacional deberá estar alejado como mínimo 50.00 metros de cualquier ducto de petróleo o sus derivados y en el punto D.6, que: Con respecto a Ductos y Poliductos transportadores de derivados del petróleo, no se permitirá el Desarrollo Urbano sobre su sección y trayecto de derecho de vía, dado su carácter de zona federal, no se permitirá el tránsito no controlado de transportes o maquinaria pesada sobre su tendido, ni la excavación a cualquier profundidad cercana a la tubería, si por algún motivo se requiere de la instalación cercana de una red de infraestructura urbana o la construcción de una vía o dispositivo vial cercano al tendido se deberá obligatoriamente concertar y coordinar su proyecto y construcción bajo la supervisión de PEMEX. La distancia mínima de resguardo a infraestructura urbana a partir del eje de la tubería; será de 35.00 mts.
                                                <br>	Los Ductos de agua y drenaje deberán pasar un metro por debajo del lecho bajo del gasoducto y las alcantarillas deberán estar alejadas 35.00 metros del derecho de vía.
                                                <br>	Para el caso de Infraestructura vial deberá hacerse una obra tipo puente, la cual deberá coordinar para la detección y sondeo del gasoducto, con la Superintendencia y ya con los datos obtenidos, ser diseñada por el solicitante de acuerdo al flujo del tráfico a circular por dicha zona. 
                                                <br>	Entregar carta responsiva notariada de los trabajos a ser llevados a cabo, firmada por el propietario o representante facultado.


                                            </p>

                                            <p class="my-2 text-gray-600 text-justify">
                                                14° Que mediante oficio número <span x-text="oficio_sedum"></span>, de fecha <span x-text="fecha_oficio_sedum"></span>, esta 
                                                Secretaría de Desarrollo Urbano y Medio Ambiente determinó que el alineamiento del 
                                                polígono motivo del desarrollo respecto al camino que conduce a la Joya de Buena Vista, 
                                                debe de preservar la sección predominante que es de 15.00 metros, es decir 7.50 metros 
                                                a cada lado del eje del camino en mención y adicionalmente considerar una calle de servicio de 10.50 metros 
                                                a cada lado de la vialidad referida.
                                               
                                            </p>

                                            {{-- De aqui en adelante hay que actualizar --}}

                                            <p class="my-2 text-gray-600 text-justify">
                                                15° Que la Dirección de Protección Civil y Bomberos, mediante Reporte Técnico y oficio con números 
                                                AER_RT#138_09 y DPCyB-0566/09, de fechas 21 y 24 de septiembre del año 2009, 
                                                recomienda generar la infraestructura necesaria para el ingreso y salida expedita, 
                                                eficiente y segura del desarrollo, no construir en la corona de la ladera natural generada 
                                                por la falla geológica “Cointzio” y dada la cercanía de la falla geológica 
                                                “El Águila”, queda condicionada la construcción del edificio multifamiliar de la manzana 53
                                               
                                            </p>

                                            <p class="my-2 text-gray-600 text-justify">
                                                16° Que mediante oficio número 747/2009, de fecha 18 de noviembre del 2009, el Arq. José Luis Rodríguez García, Director General del Instituto Municipal de Desarrollo Urbano de Morelia, manifiesta que las vialidades establecidas como “Circuito Metropolitano y Circuito Exterior” dentro del Plano de Estructura Vial en Área Urbana de Morelia, del Programa de Desarrollo Urbano del Centro de Población de Morelia 2004 vigente, no contemplan proyectos ejecutivos y su ubicación precisa se encuentra sujeta a las condiciones topográficas de los predios, a la factibilidad técnica del trazo y su continuidad en el entorno urbano, razones por las que no se considera conveniente inducir vialidades que contribuyan a aumentar el crecimiento urbano más allá del predio motivo del desarrollo
                                            </p>

                                            <p class="my-2 text-gray-600 text-justify">
                                                17° Que la Empresa “DESARROLLO INMOBILIARIO COINTZIO” S.A. de C.V., presentó a esta Secretaría la Propuesta de Publicidad destinada a promover la venta de viviendas, así como el plano topográfico del desarrollo, conforme a lo establecido en el artículo 349 fracciones VI y IX del Código de Desarrollo Urbano del Estado de Michoacán de Ocampo.                                            
                                            </p>

                                            <p class="my-2 text-gray-600 text-justify">
                                                18° Que la Dirección de Patrimonio Municipal, mediante oficio número 1484/009, de fecha 25 de noviembre del año 2009, emitió su visto bueno y opinión positiva respecto a la ubicación y aprovechamiento de las áreas de Donación Municipal y Verdes del desarrollo                                            
                                            </p>

                                            <p class="my-2 text-gray-600 text-justify">
                                                19° Que la empresa propietaria del inmueble justificó técnica y jurídicamente la petición que manifiesta en su solicitud.

                                            
                                            </p>

                                            <p class="my-2 text-gray-600 text-justify">
                                                Expuesto lo anterior y con fundamento en los artículos 1, 2 fracciones VII y VIII, 5 fracciones II y III, 6, 7, 8 fracción III, 10, 14 fracciones XV y XXXII, 273, 274 fracciones X, XI, XV, XIX y XX, 275 fracciones I y II, 277 fracción X, 289, 290 fracción I inciso c, 291, 292, 293, 294, 296, 297, 308, 316, 320, 344 fracción II, 349, 350, 357, 359 fracción II, 361 fracción I, 362 fracciones I, II y IV, 364, 367, 368 y demás relativos del Código de Desarrollo Urbano del Estado de Michoacán de Ocampo, así como los Acuerdos de Cabildo para la Delegación de Facultades de fechas 24 de marzo y 18 de noviembre del año 2008, tengo a bien emitir la siguiente:


                                            
                                            </p>

                                            <p class="my-4 text-gray-900 text-center">
                                                <b>
                                                    R  E  S  O  L  U  C  I  Ó  N:
                                                </b>
                                            </p>

                                            <p class="my-2 text-gray-600 text-justify">
                                                PRIMERO.- Queda plenamente probada la competencia de esta Secretaría.

                                            
                                            </p>
                                            <p class="my-2 text-gray-600 text-justify">
                                                SEGUNDO.- Es de autorizarse y se autoriza el Visto Bueno al Proyecto de Vialidad y Lotificación, respecto del Conjunto Habitacional tipo Interés Social con Viviendas bajo el Régimen de Propiedad en Condominio,  (densidad hasta 75 viv./ha.), denominado extraoficialmente “SAN PEDRO”, con una extensión superficial de 95-39-05.00 Ha.; formado por las parcelas 28 Z-3 P 1/1, 29 Z-2 P 1/1, 30 Z-2 P 1/1, 33 Z-2 P 1/1, 34 Z-3 P 1/1, 35 Z-3 P 1/1, 39 Z-2 P 1/1, 53 Z-2 P 1/1, 54 Z-3 P 1/1, 55 Z-3 P 1/1, 62 Z-2 P 1/1, 63 Z-3 P 1/1, 64 Z-2 P 1/1, 65 Z-2 P 1/1, 67 Z-3 P 1/1, 68 Z-2 P 1/1, 69 Z-2 P 1/1,  70 Z-2 P 1/1, 71 Z-3 P 1/1, 72 Z-3 P 1/1, 73 Z-3 P 1/1, 82 Z-2 P 1/1, 83 Z-3 P 1/1, 84 Z-2 P 1/1, 86 Z-2 P 1/1, 87 Z-2 P 1/1, 89 Z-2 P 1/1, 90 Z-2 P 1/1, 97 Z-3 P 1/1, 98 Z-5 P 1/1, 99 Z-5 P 1/1, 100 Z-5 P 1/1, 101 Z-5 P 1/1, 102 Z-5 P 1/1, 148 Z-3 P 1/1, 149 Z-3 P 1/1, 150 Z-5 P 1/1, todas pertenecientes a la localidad de Cointzio, al suroeste de este Municipio de Morelia, Michoacán, propiedad de la empresa “Desarrollo Inmobiliario Cointzio” S. A. de C. V., acreditado mediante las Escrituras números: 106, 17277, 17280, 345, 19323, 17281, 17282, 19324, 17283, 23917, 19325, 17284, 19326, 351, 17285, 19327, 19328, 19329, 17286, 17287, 17288, 19330, 17289, 355, 19331, 19332, 19333, 356, 352, 346, 347, 348, 349, 350, 353, 354, 357, inscritas en el Registro Público de la Propiedad Raíz y de Comercio en el Estado de Michoacán de Ocampo, bajo los números: 41, 13, 40, 44, 38, 27, 04,  31, 38, 28, 16, 25, 06,  35, 31, 29, 18, 17, 70, 28, 73, 26, 24, 23, tomos: 8835, 7036, 7036, 7532, 7036, 7037, 7533, 7036, 8742, 7533, 7042, 7532, 7042, 7532, 7532, 7532, 7041, 7042, 7041, 7532, 7041, 7532, 7532, 7532 del Libro de Propiedad correspondiente al Distrito de Morelia; el cual se sella y firma por esta Dependencia, así lo autoriza el C. Arq. Alejandro Contreras López, Secretario de Desarrollo Urbano y Medio Ambiente Municipal.
                                            
                                            </p>

                                            <p class="my-2 text-gray-600 text-justify">
                                                TERCERO.- La Empresa “DESARROLLO INMOBILIARIO COINTZIO” S.A. de C.V., propietaria del desarrollo, previo a la obtención de la autorización definitiva deberá entregar a esta Secretaría los títulos de concesión para la perforación, equipamiento de pozo profundo y el uso y aprovechamiento de aguas nacionales autorizados por la Comisión Nacional del Agua, así como cumplir con los requisitos establecidos en los artículos 351, 352, 358, 360 y demás relativos del Código de Desarrollo Urbano del Estado de Michoacán de Ocampo.
                                            </p>
                                            <p class="my-2 text-gray-600 text-justify">
                                                El presente documento no le autoriza a realizar promesa de compraventa, inicio o insinuación de obra de urbanización o de edificación, en tanto no obtenga la Autorización Definitiva por parte de esta Dependencia.
                                            </p>

                                            <p class="my-6 text-gray-800 text-left">
                                                <b>
                                                    SECRETARIA DE DESARROLLO 
                                                URBANO Y MOVILIDAD
                                                </b>
                                                
                                            </p>

                                            <p class="my-4 text-gray-800 text-left">
                                                <b>
                                                    DRA. JOANNA MARGARITA MORENO MANZO
                                                </b>
                                                
                                            </p>

                                            <p class="my-4 text-gray-800 text-left text-sm">
                                                C.c.p.	
                                                -	Arq. Edgard Daniel Loaiza Urueta.- Director de Desarrollo Urbano.- Edificio.-
                                                -	Arq. Haydé Saucedo Aburto.- Jefe del Departamento de Fraccionamientos, Conjuntos Habitacionales y Desarrollos en Condominio.- Edificio.-
                                                -	Archivo y Minutario.-
                                                -	Despacho del Srio.- En atención a los Folios Nos. F-2729 y F-2892.

                                                
                                            </p>


                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
