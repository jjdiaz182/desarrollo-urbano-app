<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Empresa') }}
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
                                    <h1 class="text-2xl font-semibold mb-4">Editar Desarrollo</h1>
                            
                                    @if ($errors->any())
                                        <div class="mb-4 p-4 text-red-800 bg-red-100 rounded-lg">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                            
                                    <form action="{{ route('desarrollos.update', ['empresa' => $empresa->id, 'desarrollo' => $desarrollo->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                            
                                        <div class="grid grid-cols-2 gap-4">
                                            <div>
                                                <label class="block font-medium text-gray-700">Nombre</label>
                                                <input type="text" name="nombre" value="{{ old('nombre', $desarrollo->nombre) }}" required 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Alias</label>
                                                <input type="text" name="alias" value="{{ old('alias', $desarrollo->alias) }}" 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Tipo de Desarrollo</label>
                                                <input type="text" name="tipo_desarrollo" value="{{ old('tipo_desarrollo', $desarrollo->tipo_desarrollo) }}" required 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Número de Viviendas</label>
                                                <input type="number" name="numero_viviendas" value="{{ old('numero_viviendas', $desarrollo->numero_viviendas) }}" required 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Tipo de Vivienda</label>
                                                <select name="tipo_vivienda" required class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                    <option value="interes social" {{ $desarrollo->tipo_vivienda == 'interes social' ? 'selected' : '' }}>Interés Social</option>
                                                    <option value="medio residencial" {{ $desarrollo->tipo_vivienda == 'medio residencial' ? 'selected' : '' }}>Medio Residencial</option>
                                                    <option value="residencial" {{ $desarrollo->tipo_vivienda == 'residencial' ? 'selected' : '' }}>Residencial</option>
                                                </select>
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">País</label>
                                                <input type="text" name="pais" value="{{ old('pais', $desarrollo->pais) }}" required 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Estado</label>
                                                <input type="text" name="estado" value="{{ old('estado', $desarrollo->estado) }}" required 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Municipio</label>
                                                <input type="text" name="municipio" value="{{ old('municipio', $desarrollo->municipio) }}" required 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>
                                        </div>
                            
                                        <div class="mt-6 flex gap-4">
                                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                                Actualizar
                                            </button>
                                            <a href="{{ route('desarrollos.index', ['empresa' => $empresa->id]) }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
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
