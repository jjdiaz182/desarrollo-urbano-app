<div class="flex justify-between">


    <div class="w-full mx-4 h-[calc(100vh-200px)]  overflow-y-auto">
        
        <div class="py-2">
            {{-- Success is as dangerous as failure. --}}
            <h2 class="text-xl font-semibold mb-4 text-center">Formulario</h2>
        
            <!-- Datos Generales -->
            <h3 class="font-semibold mb-2 ">Datos Generales</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="fecha_autorizacion">Fecha Autorización</label>
                <input type="date" id="fecha_autorizacion" wire:model.live="fecha_autorizacion" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="propietario" >Propietario</label>
                <input type="text" id="propietario" wire:model.live="propietario" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="cargo" >Cargo</label>
                <input type="text" id="cargo" wire:model.live="cargo" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="empresa">Empresa</label>
                <input type="text" id="empresa" wire:model.live="empresa" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="domicilio" class="text-gray-800 text-sm">Domicilio</label>
                <input type="text" id="domicilio" wire:model.live="domicilio" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"class="text-gray-800 text-sm"for="expediente">Expediente</label>
                <input type="text" id="expediente" wire:model.live="expediente" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"class="text-gray-800 text-sm"for="folio_solicitud">Folio Solicitud</label>
                <input type="text" id="folio_solicitud" wire:model.live="folio_solicitud" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"class="text-gray-800 text-sm"for="desarrollo">Desarrollo</label>
                <input type="text" id="desarrollo" wire:model.live="desarrollo" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="nombre">Nombre</label>
                <input type="text" id="nombre" wire:model.live="nombre" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="ubicacion">Ubicación</label>
                <input type="text" id="ubicacion" wire:model.live="ubicacion" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="superficie">Superficie</label>
                <input type="text" id="superficie" wire:model.live="superficie" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <!-- Escritura de Propiedad -->
            <h3 class="font-semibold mb-2">Escritura de Propiedad</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="notario_propiedad">Notario</label>
                <input type="text" id="notario_propiedad" wire:model.live="notario_propiedad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="notaria_numero_propiedad">Notaria Número</label>
                <input type="text" id="notaria_numero_propiedad" wire:model.live="notaria_numero_propiedad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="no_escritura_propiedad">No. Escritura</label>
                <input type="text" id="no_escritura_propiedad" wire:model.live="no_escritura_propiedad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="fecha_escritura_propiedad">Fecha Escritura</label>
                <input type="date" id="fecha_escritura_propiedad" wire:model.live="fecha_escritura_propiedad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="registro_numero">Registro Número</label>
                <input type="text" id="registro_numero" wire:model.live="registro_numero" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="tomo_numero">Tomo Número</label>
                <input type="text" id="tomo_numero" wire:model.live="tomo_numero" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="cuenta_predial">Cuenta Predial</label>
                <input type="text" id="cuenta_predial" wire:model.live="cuenta_predial" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="recibo_pago_predial">Recibo Pago Predial</label>
                <input type="text" id="recibo_pago_predial" wire:model.live="recibo_pago_predial" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="referencia_pago">Referencia Pago</label>
                <input type="text" id="referencia_pago" wire:model.live="referencia_pago" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="fecha_pago">Fecha Pago</label>
                <input type="date" id="fecha_pago" wire:model.live="fecha_pago" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
        
            <!-- Escritura Constitutiva -->
            <h3 class="font-semibold mb-2">Escritura Constitutiva</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="notario_constitutiva">Notario</label>
                <input type="text" id="notario_constitutiva" wire:model.live="notario_constitutiva" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="notaria_numero_constitutiva">Notaria Número</label>
                <input type="text" id="notaria_numero_constitutiva" wire:model.live="notaria_numero_constitutiva" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="no_escritura_constitutiva">No. Escritura</label>
                <input type="text" id="no_escritura_constitutiva" wire:model.live="no_escritura_constitutiva" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="fecha_escritura_constitutiva">Fecha Escritura</label>
                <input type="date" id="fecha_escritura_constitutiva" wire:model.live="fecha_escritura_constitutiva" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="folio_mercantil">Folio Mercantil</label>
                <input type="text" id="folio_mercantil" wire:model.live="folio_mercantil" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <!-- Escritura Apoderado Legal -->
            <h3 class="font-semibold mb-2">Escritura Apoderado Legal</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="notario_apoderado">Notario</label>
                <input type="text" id="notario_apoderado" wire:model.live="notario_apoderado" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="notaria_numero_apoderado">Notaria Número</label>
                <input type="text" id="notaria_numero_apoderado" wire:model.live="notaria_numero_apoderado" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="no_escritura_apoderado">No. Escritura</label>
                <input type="text" id="no_escritura_apoderado" wire:model.live="no_escritura_apoderado" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="fecha_escritura_apoderado">Fecha Escritura</label>
                <input type="date" id="fecha_escritura_apoderado" wire:model.live="fecha_escritura_apoderado" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="solicitante_apoderado">Solicitante/Apoderado</label>
                <input type="text" id="solicitante_apoderado" wire:model.live="solicitante_apoderado" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="caracter">Carácter</label>
                <input type="text" id="caracter" wire:model.live="caracter" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="poder_para">Poder para</label>
                <input type="text" id="poder_para" wire:model.live="poder_para" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <!-- Licencia de Uso del Suelo -->
            <h3 class="font-semibold mb-2">Licencia de Uso del Suelo</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="oficio_numero_uso_suelo">Oficio Número</label>
                <input type="text" id="oficio_numero_uso_suelo" wire:model.live="oficio_numero_uso_suelo" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="fecha_uso_suelo">Fecha</label>
                <input type="date" id="fecha_uso_suelo" wire:model.live="fecha_uso_suelo" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="otorgado_por">Otorgado por</label>
                <input type="text" id="otorgado_por" wire:model.live="otorgado_por" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="documento_uso_suelo">Documento</label>
                <input type="text" id="documento_uso_suelo" wire:model.live="documento_uso_suelo" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <!-- Manifestación de Impacto Ambiental -->
            <h3 class="font-semibold mb-2">Manifestación de Impacto Ambiental</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="expediente_impacto_ambiental">Expediente Número</label>
                <input type="text" id="expediente_impacto_ambiental" wire:model.live="expediente_impacto_ambiental" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="oficio_numero_impacto_ambiental">Oficio Número</label>
                <input type="text" id="oficio_numero_impacto_ambiental" wire:model.live="oficio_numero_impacto_ambiental" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="fecha_impacto_ambiental">Fecha</label>
                <input type="date" id="fecha_impacto_ambiental" wire:model.live="fecha_impacto_ambiental" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <!-- Factibilidad de Agua Potable -->
            <h3 class="font-semibold mb-2">Factibilidad de Agua Potable</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="dependencia_agua">Dependencia</label>
                <input type="text" id="dependencia_agua" wire:model.live="dependencia_agua" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="oficio_numero_agua">Oficio Número</label>
                <input type="text" id="oficio_numero_agua" wire:model.live="oficio_numero_agua" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="fecha_agua">Fecha</label>
                <input type="date" id="fecha_agua" wire:model.live="fecha_agua" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="factibilidad_para_agua">Factibilidad para</label>
                <input type="text" id="factibilidad_para_agua" wire:model.live="factibilidad_para_agua" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <!-- Visto Bueno Factibilidad por OOAPAS -->
            <h3 class="font-semibold mb-2">Visto Bueno Factibilidad por OOAPAS</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="dependencia_ooapas">Dependencia</label>
                <input type="text" id="dependencia_ooapas" wire:model.live="dependencia_ooapas" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="oficio_numero_ooapas">Oficio Número</label>
                <input type="text" id="oficio_numero_ooapas" wire:model.live="oficio_numero_ooapas" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="fecha_ooapas">Fecha</label>
                <input type="date" id="fecha_ooapas" wire:model.live="fecha_ooapas" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="factibilidad_para_ooapas">Factibilidad para</label>
                <input type="text" id="factibilidad_para_ooapas" wire:model.live="factibilidad_para_ooapas" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <!-- Factibilidad de CFE -->
            <h3 class="font-semibold mb-2">Factibilidad de CFE</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="dependencia_cfe">Dependencia</label>
                <input type="text" id="dependencia_cfe" wire:model.live="dependencia_cfe" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="oficio_numero_cfe">Oficio Número</label>
                <input type="text" id="oficio_numero_cfe" wire:model.live="oficio_numero_cfe" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="fecha_cfe">Fecha</label>
                <input type="date" id="fecha_cfe" wire:model.live="fecha_cfe" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="para_el_cfe">Para el</label>
                <input type="text" id="para_el_cfe" wire:model.live="para_el_cfe" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="superficie_cfe">Superficie</label>
                <input type="text" id="superficie_cfe" wire:model.live="superficie_cfe" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <!-- Protección Civil -->
            <h3 class="font-semibold mb-2">Protección Civil</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="dependencia_pc">Dependencia</label>
                <input type="text" id="dependencia_pc" wire:model.live="dependencia_pc" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="oficio_numero_pc">Oficio Número</label>
                <input type="text" id="oficio_numero_pc" wire:model.live="oficio_numero_pc" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="fecha_pc">Fecha</label>
                <input type="date" id="fecha_pc" wire:model.live="fecha_pc" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="reporte_tecnico_pc">Reporte Técnico No.</label>
                <input type="text" id="reporte_tecnico_pc" wire:model.live="reporte_tecnico_pc" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="manifiesta_que_pc">Manifiesta que</label>
                <input type="text" id="manifiesta_que_pc" wire:model.live="manifiesta_que_pc" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <!-- Medición y Deslinde Catastral -->
            <h3 class="font-semibold mb-2">Medición y Deslinde Catastral</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="dependencia_catastro">Dependencia</label>
                <input type="text" id="dependencia_catastro" wire:model.live="dependencia_catastro" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="oficio_numero_catastro">Oficio Número</label>
                <input type="text" id="oficio_numero_catastro" wire:model.live="oficio_numero_catastro" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="fecha_catastro">Fecha</label>
                <input type="date" id="fecha_catastro" wire:model.live="fecha_catastro" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="expediente_numero_catastro">Expediente Número</label>
                <input type="text" id="expediente_numero_catastro" wire:model.live="expediente_numero_catastro" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="superficie_catastro">Superficie Catastral</label>
                <input type="text" id="superficie_catastro" wire:model.live="superficie_catastro" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <!-- Plano Topográfico -->
            <h3 class="font-semibold mb-2">Plano Topográfico</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="superficie_topografico">Superficie</label>
                <input type="text" id="superficie_topografico" wire:model.live="superficie_topografico" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <!-- Impacto Urbano y Vial -->
            <h3 class="font-semibold mb-2">Impacto Urbano y Vial</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="oficio_numero_urbano">Oficio Número</label>
                <input type="text" id="oficio_numero_urbano" wire:model.live="oficio_numero_urbano" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="fecha_urbano">Fecha</label>
                <input type="date" id="fecha_urbano" wire:model.live="fecha_urbano" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <!-- Dictamen de Sustentabilidad -->
            <h3 class="font-semibold mb-2">Dictamen de Sustentabilidad</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="dependencia_sustentabilidad">Dependencia</label>
                <input type="text" id="dependencia_sustentabilidad" wire:model.live="dependencia_sustentabilidad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="oficio_numero_sustentabilidad">Oficio Número</label>
                <input type="text" id="oficio_numero_sustentabilidad" wire:model.live="oficio_numero_sustentabilidad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="fecha_sustentabilidad">Fecha</label>
                <input type="date" id="fecha_sustentabilidad" wire:model.live="fecha_sustentabilidad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="donacion_sustentabilidad">Donación</label>
                <input type="text" id="donacion_sustentabilidad" wire:model.live="donacion_sustentabilidad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <!-- Movilidad Sustentable -->
            <h3 class="font-semibold mb-2">Movilidad Sustentable</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="dependencia_movilidad">Dependencia</label>
                <input type="text" id="dependencia_movilidad" wire:model.live="dependencia_movilidad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="oficio_numero_movilidad">Oficio Número</label>
                <input type="text" id="oficio_numero_movilidad" wire:model.live="oficio_numero_movilidad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="fecha_movilidad">Fecha</label>
                <input type="date" id="fecha_movilidad" wire:model.live="fecha_movilidad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <!-- Licencia de Obras de Urbanización -->
            <h3 class="font-semibold mb-2">Licencia de Obras de Urbanización</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="dependencia_obras">Dependencia</label>
                <input type="text" id="dependencia_obras" wire:model.live="dependencia_obras" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="oficio_numero_obras">Oficio Número</label>
                <input type="text" id="oficio_numero_obras" wire:model.live="oficio_numero_obras" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="fecha_obras">Fecha</label>
                <input type="date" id="fecha_obras" wire:model.live="fecha_obras" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="para_las_vialidades">Para las vialidades</label>
                <input type="text" id="para_las_vialidades" wire:model.live="para_las_vialidades" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <!-- Patrimonio Municipal -->
            <h3 class="font-semibold mb-2">Patrimonio Municipal</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="dependencia_patrimonio">Dependencia</label>
                <input type="text" id="dependencia_patrimonio" wire:model.live="dependencia_patrimonio" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="oficio_numero_patrimonio">Oficio Número</label>
                <input type="text" id="oficio_numero_patrimonio" wire:model.live="oficio_numero_patrimonio" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="fecha_patrimonio">Fecha</label>
                <input type="date" id="fecha_patrimonio" wire:model.live="fecha_patrimonio" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="correspondiente_a_patrimonio">Correspondiente a</label>
                <input type="text" id="correspondiente_a_patrimonio" wire:model.live="correspondiente_a_patrimonio" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <!-- Revisión de Proyectos para VoBo -->
            <h3 class="font-semibold mb-2">Revisión de Proyectos para VoBo</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="recibo_pago_vobo">Recibo de Pago</label>
                <input type="text" id="recibo_pago_vobo" wire:model.live="recibo_pago_vobo" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="fecha_vobo">Fecha</label>
                <input type="date" id="fecha_vobo" wire:model.live="fecha_vobo" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="para_vobo">Para</label>
                <input type="text" id="para_vobo" wire:model.live="para_vobo" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <!-- Director Responsable de Obra -->
            <h3 class="font-semibold mb-2">Director Responsable de Obra</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="dro">DRO</label>
                <input type="text" id="dro" wire:model.live="dro" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="cedula_dro">Cédula</label>
                <input type="text" id="cedula_dro" wire:model.live="cedula_dro" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="profesion_dro">Profesión</label>
                <input type="text" id="profesion_dro" wire:model.live="profesion_dro" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="drodo">DRODO</label>
                <input type="text" id="drodo" wire:model.live="drodo" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <!-- Director Responsable de Obra de Urbanización -->
            <h3 class="font-semibold mb-2">Director Responsable de Obra de Urbanización</h3>
            <div class="mx-4">
                <label class="text-gray-800 text-sm"for="drou">DROU</label>
                <input type="text" id="drou" wire:model.live="drou" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="cedula_drou">Cédula</label>
                <input type="text" id="cedula_drou" wire:model.live="cedula_drou" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="profesion_drou">Profesión</label>
                <input type="text" id="profesion_drou" wire:model.live="profesion_drou" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        
                <label class="text-gray-800 text-sm"for="drodu">DRODU</label>
                <input type="text" id="drodu" wire:model.live="drodu" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        
            <div class="px-4 flex flex-row-reverse">  
                <div class="p-4 m-4 border-gray-400 shadow-md rounded-md bg-green-500 text-white hover:text-gray-300 hover:bg-green-600">
                    <button wire:click="downloadPDF"> Imprimir </button>
                </div>
                
            </div>
        </div>

    </div>

<!--
    PARTE DE VISUALIZACIÓN DEL DOCUMENTO
-->
    <div class="w-full mx-4 h-[calc(100vh-200px)]  overflow-y-auto">
        
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
                
                        <p>2º.- Que la propiedad del inmueble, la acreditan mediante la escritura pública número {{ $no_escritura_propiedad ?? '(EscrituraPRO)' }}, de fecha {{ $fecha_autorizacion ?? '(Fecha_Autorización)' }}, pasada ante la fe del Lic. {{ $notario_propiedad ?? '(NotarioPROP)' }}, Notario Público Número {{$notaria_numero_propiedad ?? '(NoNotPRO)'}}, con ejercicio y residencia en esta ciudad, inscrita en el Registro Público de la Propiedad Raíz y de Comercio en el Estado, bajo el número '{{$no_escritura_propiedad ?? '(R_PROP)'}}', tomo {{$tomo_numero ?? '(TOMO)'}}, del Libro de Propiedad, correspondiente al Distrito de Morelia, Michoacán de Ocampo, con una superficie de {{ $superficie ?? '(Superficie)' }}.</p>
                
                        <p>3º.- Que la empresa “{{ $empresa ?? '(Empresa)' }}” S.A. DE C.V., acredita su legal existencia mediante Escritura pública número {{$no_escritura_constitutiva ?? '(EscrituraAC)'}}, de fecha {{$fecha_escritura_constitutiva ?? '(FechaAC)'}}, otorgada por el Lic. {{$notario_constitutiva ?? '(NotarioAC)'}}, Notario Público Número {{$notaria_numero_constitutiva ?? '(NoNotAC)'}}, con ejercicio y residencia en esta ciudad, inscrita en el Registro Público de la Propiedad Raíz y del Comercio en el Estado de Michoacán de Ocampo, bajo el folio mercantil electrónico número {{$folio_mercantil ?? '(FolioAC)'}}.</p>
                
                        <p>4º.- Que la empresa “{{ $empresa ?? '(Empresa)' }}” S.A. de C.V. otorgó poder general para {{ $poder_para ?? '(Poder)'}}, mediante escritura pública {{$no_escritura_apoderado ?? '(EscrituraPODER)'}}, de fecha {{ $fecha_escritura_apoderado ?? '(FechaPODER)'}}, pasada ante la fe del Lic. {{$notario_apoderado ?? '(NotarioPODER)'}}, Notario Público número {{ $notaria_numero_apoderado ?? '(NoNotPODER)'}}, con ejercicio y residencia en este distrito judicial de Morelia, Michoacán de Ocampo, a favor de la {{ $solicitante_apoderado ?? '(Solicitante)'}}.</p>
                
                        <p>5º.- Que la {{ $oficio_numero_uso_suelo ?? '(Dependencia_LUS)'}}, mediante oficio número {{$oficio_numero_uso_suelo ?? '(Oficio_LUS)'}}, de fecha {{$fecha_uso_suelo ?? '(Fecha_LUS)'}}, expidió {{ $documento_uso_suelo ?? '(Docto_LUS)'}}, en los predios ubicados en {{ $ubicacion ?? '(Ubicación)' }}, en una extensión superficial de {{ $superficie ?? '(Superficie)' }}.</p>
                
                        <p>6º.- Que la (DependenciaMIA), mediante expediente número {{ $expediente_impacto_ambiental ?? '(ExpMIA)'}}, y oficio número {{ $oficio_numero_impacto_ambiental ?? '(OficioMIA)'}} de fecha {{ $fecha_impacto_ambiental ?? '(FechaMIA)'}}, autorizó la Manifestación de Impacto Ambiental para el {{ $desarrollo ?? '(Desarrollo)' }} denominado extraoficialmente “{{ $nombre ?? '(Nombre)'}}”.</p>
                
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

    </div>
</div>