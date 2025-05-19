<div class="py-2">
    {{-- Success is as dangerous as failure. --}}
    <h2 class="text-xl font-semibold mb-4 text-center">Formulario</h2>

    <!-- Datos Generales -->
    <h3 class="font-semibold mb-2 ">Datos Generales</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="fecha_autorizacion">Fecha Autorización</label>
        <input type="date" id="fecha_autorizacion" wire:model.live="fecha_autorizacion" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="propietario" >Propietario</label>
        <input type="text" id="propietario" wire:model="propietario" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="cargo" >Cargo</label>
        <input type="text" id="cargo" wire:model="cargo" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="empresa">Empresa</label>
        <input type="text" id="empresa" wire:model="empresa" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="domicilio" class="text-gray-800 text-sm">Domicilio</label>
        <input type="text" id="domicilio" wire:model="domicilio" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"class="text-gray-800 text-sm"for="expediente">Expediente</label>
        <input type="text" id="expediente" wire:model="expediente" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"class="text-gray-800 text-sm"for="folio_solicitud">Folio Solicitud</label>
        <input type="text" id="folio_solicitud" wire:model="folio_solicitud" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"class="text-gray-800 text-sm"for="desarrollo">Desarrollo</label>
        <input type="text" id="desarrollo" wire:model="desarrollo" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="nombre">Nombre</label>
        <input type="text" id="nombre" wire:model="nombre" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="ubicacion">Ubicación</label>
        <input type="text" id="ubicacion" wire:model="ubicacion" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="superficie">Superficie</label>
        <input type="text" id="superficie" wire:model="superficie" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- Escritura de Propiedad -->
    <h3 class="font-semibold mb-2">Escritura de Propiedad</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="notario_propiedad">Notario</label>
        <input type="text" id="notario_propiedad" wire:model="notario_propiedad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="notaria_numero_propiedad">Notaria Número</label>
        <input type="text" id="notaria_numero_propiedad" wire:model="notaria_numero_propiedad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="no_escritura_propiedad">No. Escritura</label>
        <input type="text" id="no_escritura_propiedad" wire:model="no_escritura_propiedad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="fecha_escritura_propiedad">Fecha Escritura</label>
        <input type="date" id="fecha_escritura_propiedad" wire:model="fecha_escritura_propiedad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="registro_numero">Registro Número</label>
        <input type="text" id="registro_numero" wire:model="registro_numero" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="tomo_numero">Tomo Número</label>
        <input type="text" id="tomo_numero" wire:model="tomo_numero" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="cuenta_predial">Cuenta Predial</label>
        <input type="text" id="cuenta_predial" wire:model="cuenta_predial" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="recibo_pago_predial">Recibo Pago Predial</label>
        <input type="text" id="recibo_pago_predial" wire:model="recibo_pago_predial" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="referencia_pago">Referencia Pago</label>
        <input type="text" id="referencia_pago" wire:model="referencia_pago" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="fecha_pago">Fecha Pago</label>
        <input type="date" id="fecha_pago" wire:model="fecha_pago" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>


    <!-- Escritura Constitutiva -->
    <h3 class="font-semibold mb-2">Escritura Constitutiva</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="notario_constitutiva">Notario</label>
        <input type="text" id="notario_constitutiva" wire:model="notario_constitutiva" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="notaria_numero_constitutiva">Notaria Número</label>
        <input type="text" id="notaria_numero_constitutiva" wire:model="notaria_numero_constitutiva" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="no_escritura_constitutiva">No. Escritura</label>
        <input type="text" id="no_escritura_constitutiva" wire:model="no_escritura_constitutiva" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="fecha_escritura_constitutiva">Fecha Escritura</label>
        <input type="date" id="fecha_escritura_constitutiva" wire:model="fecha_escritura_constitutiva" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="folio_mercantil">Folio Mercantil</label>
        <input type="text" id="folio_mercantil" wire:model="folio_mercantil" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- Escritura Apoderado Legal -->
    <h3 class="font-semibold mb-2">Escritura Apoderado Legal</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="notario_apoderado">Notario</label>
        <input type="text" id="notario_apoderado" wire:model="notario_apoderado" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="notaria_numero_apoderado">Notaria Número</label>
        <input type="text" id="notaria_numero_apoderado" wire:model="notaria_numero_apoderado" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="no_escritura_apoderado">No. Escritura</label>
        <input type="text" id="no_escritura_apoderado" wire:model="no_escritura_apoderado" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="fecha_escritura_apoderado">Fecha Escritura</label>
        <input type="date" id="fecha_escritura_apoderado" wire:model="fecha_escritura_apoderado" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="solicitante_apoderado">Solicitante/Apoderado</label>
        <input type="text" id="solicitante_apoderado" wire:model="solicitante_apoderado" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="caracter">Carácter</label>
        <input type="text" id="caracter" wire:model="caracter" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="poder_para">Poder para</label>
        <input type="text" id="poder_para" wire:model="poder_para" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- Licencia de Uso del Suelo -->
    <h3 class="font-semibold mb-2">Licencia de Uso del Suelo</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="oficio_numero_uso_suelo">Oficio Número</label>
        <input type="text" id="oficio_numero_uso_suelo" wire:model="oficio_numero_uso_suelo" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="fecha_uso_suelo">Fecha</label>
        <input type="date" id="fecha_uso_suelo" wire:model="fecha_uso_suelo" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="otorgado_por">Otorgado por</label>
        <input type="text" id="otorgado_por" wire:model="otorgado_por" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="documento_uso_suelo">Documento</label>
        <input type="text" id="documento_uso_suelo" wire:model="documento_uso_suelo" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- Manifestación de Impacto Ambiental -->
    <h3 class="font-semibold mb-2">Manifestación de Impacto Ambiental</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="expediente_impacto_ambiental">Expediente Número</label>
        <input type="text" id="expediente_impacto_ambiental" wire:model="expediente_impacto_ambiental" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="oficio_numero_impacto_ambiental">Oficio Número</label>
        <input type="text" id="oficio_numero_impacto_ambiental" wire:model="oficio_numero_impacto_ambiental" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="fecha_impacto_ambiental">Fecha</label>
        <input type="date" id="fecha_impacto_ambiental" wire:model="fecha_impacto_ambiental" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- Factibilidad de Agua Potable -->
    <h3 class="font-semibold mb-2">Factibilidad de Agua Potable</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="dependencia_agua">Dependencia</label>
        <input type="text" id="dependencia_agua" wire:model="dependencia_agua" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="oficio_numero_agua">Oficio Número</label>
        <input type="text" id="oficio_numero_agua" wire:model="oficio_numero_agua" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="fecha_agua">Fecha</label>
        <input type="date" id="fecha_agua" wire:model="fecha_agua" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="factibilidad_para_agua">Factibilidad para</label>
        <input type="text" id="factibilidad_para_agua" wire:model="factibilidad_para_agua" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- Visto Bueno Factibilidad por OOAPAS -->
    <h3 class="font-semibold mb-2">Visto Bueno Factibilidad por OOAPAS</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="dependencia_ooapas">Dependencia</label>
        <input type="text" id="dependencia_ooapas" wire:model="dependencia_ooapas" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="oficio_numero_ooapas">Oficio Número</label>
        <input type="text" id="oficio_numero_ooapas" wire:model="oficio_numero_ooapas" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="fecha_ooapas">Fecha</label>
        <input type="date" id="fecha_ooapas" wire:model="fecha_ooapas" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="factibilidad_para_ooapas">Factibilidad para</label>
        <input type="text" id="factibilidad_para_ooapas" wire:model="factibilidad_para_ooapas" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- Factibilidad de CFE -->
    <h3 class="font-semibold mb-2">Factibilidad de CFE</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="dependencia_cfe">Dependencia</label>
        <input type="text" id="dependencia_cfe" wire:model="dependencia_cfe" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="oficio_numero_cfe">Oficio Número</label>
        <input type="text" id="oficio_numero_cfe" wire:model="oficio_numero_cfe" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="fecha_cfe">Fecha</label>
        <input type="date" id="fecha_cfe" wire:model="fecha_cfe" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="para_el_cfe">Para el</label>
        <input type="text" id="para_el_cfe" wire:model="para_el_cfe" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="superficie_cfe">Superficie</label>
        <input type="text" id="superficie_cfe" wire:model="superficie_cfe" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- Protección Civil -->
    <h3 class="font-semibold mb-2">Protección Civil</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="dependencia_pc">Dependencia</label>
        <input type="text" id="dependencia_pc" wire:model="dependencia_pc" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="oficio_numero_pc">Oficio Número</label>
        <input type="text" id="oficio_numero_pc" wire:model="oficio_numero_pc" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="fecha_pc">Fecha</label>
        <input type="date" id="fecha_pc" wire:model="fecha_pc" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="reporte_tecnico_pc">Reporte Técnico No.</label>
        <input type="text" id="reporte_tecnico_pc" wire:model="reporte_tecnico_pc" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="manifiesta_que_pc">Manifiesta que</label>
        <input type="text" id="manifiesta_que_pc" wire:model="manifiesta_que_pc" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- Medición y Deslinde Catastral -->
    <h3 class="font-semibold mb-2">Medición y Deslinde Catastral</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="dependencia_catastro">Dependencia</label>
        <input type="text" id="dependencia_catastro" wire:model="dependencia_catastro" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="oficio_numero_catastro">Oficio Número</label>
        <input type="text" id="oficio_numero_catastro" wire:model="oficio_numero_catastro" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="fecha_catastro">Fecha</label>
        <input type="date" id="fecha_catastro" wire:model="fecha_catastro" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="expediente_numero_catastro">Expediente Número</label>
        <input type="text" id="expediente_numero_catastro" wire:model="expediente_numero_catastro" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="superficie_catastro">Superficie Catastral</label>
        <input type="text" id="superficie_catastro" wire:model="superficie_catastro" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- Plano Topográfico -->
    <h3 class="font-semibold mb-2">Plano Topográfico</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="superficie_topografico">Superficie</label>
        <input type="text" id="superficie_topografico" wire:model="superficie_topografico" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- Impacto Urbano y Vial -->
    <h3 class="font-semibold mb-2">Impacto Urbano y Vial</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="oficio_numero_urbano">Oficio Número</label>
        <input type="text" id="oficio_numero_urbano" wire:model="oficio_numero_urbano" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="fecha_urbano">Fecha</label>
        <input type="date" id="fecha_urbano" wire:model="fecha_urbano" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- Dictamen de Sustentabilidad -->
    <h3 class="font-semibold mb-2">Dictamen de Sustentabilidad</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="dependencia_sustentabilidad">Dependencia</label>
        <input type="text" id="dependencia_sustentabilidad" wire:model="dependencia_sustentabilidad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="oficio_numero_sustentabilidad">Oficio Número</label>
        <input type="text" id="oficio_numero_sustentabilidad" wire:model="oficio_numero_sustentabilidad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="fecha_sustentabilidad">Fecha</label>
        <input type="date" id="fecha_sustentabilidad" wire:model="fecha_sustentabilidad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="donacion_sustentabilidad">Donación</label>
        <input type="text" id="donacion_sustentabilidad" wire:model="donacion_sustentabilidad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- Movilidad Sustentable -->
    <h3 class="font-semibold mb-2">Movilidad Sustentable</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="dependencia_movilidad">Dependencia</label>
        <input type="text" id="dependencia_movilidad" wire:model="dependencia_movilidad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="oficio_numero_movilidad">Oficio Número</label>
        <input type="text" id="oficio_numero_movilidad" wire:model="oficio_numero_movilidad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="fecha_movilidad">Fecha</label>
        <input type="date" id="fecha_movilidad" wire:model="fecha_movilidad" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- Licencia de Obras de Urbanización -->
    <h3 class="font-semibold mb-2">Licencia de Obras de Urbanización</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="dependencia_obras">Dependencia</label>
        <input type="text" id="dependencia_obras" wire:model="dependencia_obras" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="oficio_numero_obras">Oficio Número</label>
        <input type="text" id="oficio_numero_obras" wire:model="oficio_numero_obras" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="fecha_obras">Fecha</label>
        <input type="date" id="fecha_obras" wire:model="fecha_obras" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="para_las_vialidades">Para las vialidades</label>
        <input type="text" id="para_las_vialidades" wire:model="para_las_vialidades" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- Patrimonio Municipal -->
    <h3 class="font-semibold mb-2">Patrimonio Municipal</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="dependencia_patrimonio">Dependencia</label>
        <input type="text" id="dependencia_patrimonio" wire:model="dependencia_patrimonio" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="oficio_numero_patrimonio">Oficio Número</label>
        <input type="text" id="oficio_numero_patrimonio" wire:model="oficio_numero_patrimonio" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="fecha_patrimonio">Fecha</label>
        <input type="date" id="fecha_patrimonio" wire:model="fecha_patrimonio" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="correspondiente_a_patrimonio">Correspondiente a</label>
        <input type="text" id="correspondiente_a_patrimonio" wire:model="correspondiente_a_patrimonio" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- Revisión de Proyectos para VoBo -->
    <h3 class="font-semibold mb-2">Revisión de Proyectos para VoBo</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="recibo_pago_vobo">Recibo de Pago</label>
        <input type="text" id="recibo_pago_vobo" wire:model="recibo_pago_vobo" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="fecha_vobo">Fecha</label>
        <input type="date" id="fecha_vobo" wire:model="fecha_vobo" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="para_vobo">Para</label>
        <input type="text" id="para_vobo" wire:model="para_vobo" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- Director Responsable de Obra -->
    <h3 class="font-semibold mb-2">Director Responsable de Obra</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="dro">DRO</label>
        <input type="text" id="dro" wire:model="dro" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="cedula_dro">Cédula</label>
        <input type="text" id="cedula_dro" wire:model="cedula_dro" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="profesion_dro">Profesión</label>
        <input type="text" id="profesion_dro" wire:model="profesion_dro" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="drodo">DRODO</label>
        <input type="text" id="drodo" wire:model="drodo" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- Director Responsable de Obra de Urbanización -->
    <h3 class="font-semibold mb-2">Director Responsable de Obra de Urbanización</h3>
    <div class="mx-4">
        <label class="text-gray-800 text-sm"for="drou">DROU</label>
        <input type="text" id="drou" wire:model="drou" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="cedula_drou">Cédula</label>
        <input type="text" id="cedula_drou" wire:model="cedula_drou" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="profesion_drou">Profesión</label>
        <input type="text" id="profesion_drou" wire:model="profesion_drou" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

        <label class="text-gray-800 text-sm"for="drodu">DRODU</label>
        <input type="text" id="drodu" wire:model="drodu" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <div class="px-4 flex flex-row-reverse">  
        <div class="p-4 m-4 border-gray-400 shadow-md rounded-md bg-green-500 text-white hover:text-gray-300 hover:bg-green-600">
            <button wire:click="downloadPDF"> Imprimir </button>
        </div>
        
    </div>
</div>
