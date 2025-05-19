<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Desarrollos') }}
        </h2>
    </x-slot>

    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg ">
                <div class="px-4">
                    <div class="bg-white my-4 mx-4">
                       
                        <div>
                            
                            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 py-6">
                                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                                    <h1 class="text-2xl font-semibold mb-4">Crear Desarrollo para {{ $empresa->nombre }}</h1>
                            
                                    <form action="{{ route('desarrollos.store', $empresa) }}" method="POST">
                                        @csrf
                            
                                        <div class="grid grid-cols-2 gap-4">
                                            <div>
                                                <label class="block font-medium text-gray-700">Nombre</label>
                                                <input type="text" name="nombre" required class="w-full px-4 py-2 border rounded-md">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Alias</label>
                                                <input type="text" name="alias" class="w-full px-4 py-2 border rounded-md">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Tipo de Desarrollo</label>
                                                <input type="text" name="tipo_desarrollo" required class="w-full px-4 py-2 border rounded-md">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Número de Viviendas</label>
                                                <input type="number" name="numero_viviendas" required class="w-full px-4 py-2 border rounded-md">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Tipo de Vivienda</label>
                                                <select name="tipo_vivienda" required class="w-full px-4 py-2 border rounded-md">
                                                    <option value="interes social">Interés Social</option>
                                                    <option value="medio residencial">Medio Residencial</option>
                                                    <option value="residencial">Residencial</option>
                                                </select>
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">País</label>
                                                <input type="text" name="pais" required class="w-full px-4 py-2 border rounded-md">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Estado</label>
                                                <input type="text" name="estado" required class="w-full px-4 py-2 border rounded-md">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Municipio</label>
                                                <input type="text" name="municipio" required class="w-full px-4 py-2 border rounded-md">
                                            </div>
                                        </div>
                            
                                        <div class="mt-6 flex gap-4">
                                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                                Guardar
                                            </button>
                                            <a href="{{ route('desarrollos.index', $empresa) }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                                                Cancelar
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
