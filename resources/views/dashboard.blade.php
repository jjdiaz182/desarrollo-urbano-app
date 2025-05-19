<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="  sm:rounded-lg ">
                <div >
                    <div >
                        {{-- @livewire('form-document') --}}

                        <div class="flex flex-col items-center justify-center  bg-gray-100">
                            <div class="bg-white shadow-lg rounded-lg p-8 text-center w-full max-w-lg">
                                <h1 class="text-3xl font-bold text-gray-800 mb-6">Solicitud de Visto Bueno</h1>
                                <p class="text-lg text-gray-600 mb-6">Para empezar, registremos una empresa.</p>
                    
                                <div class="flex flex-col space-y-4 w-full">
                                    <a href="{{ route('empresas.create') }}"
                                       class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 transition w-full">
                                        Registrar Empresa
                                    </a>
                    
                                    <a href="{{ route('empresas.index') }}"
                                       class="px-6 py-3 bg-green-500 text-white font-semibold rounded-md hover:bg-green-600 transition w-full">
                                        Ver Listado de Empresas
                                    </a>

                                    <!-- Botón Deshabilitado -->
                                    <button disabled
                                        class="px-6 py-3 bg-yellow-500 text-white font-semibold rounded-md w-full opacity-70 cursor-not-allowed">
                                        Gestión de Usuarios
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
