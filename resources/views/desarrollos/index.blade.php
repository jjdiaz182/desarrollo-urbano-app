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
                            
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
                                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                                    <div class="flex justify-between items-center mb-4">
                                        <h1 class="text-2xl font-semibold">Desarrollos de {{ $empresa->nombre }}</h1>
                                        <a href="{{ route('desarrollos.create', $empresa) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                            Agregar Desarrollo
                                        </a>
                                    </div>
                            
                                    @if(session('success'))
                                        <div class="p-4 mb-4 text-green-800 bg-green-100 rounded-lg">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                            
                                    <table class="w-full border border-gray-200 rounded-md">
                                        <thead>
                                            <tr class="bg-gray-100 text-left">
                                                <th class="py-2 px-4 border">Nombre</th>
                                                <th class="py-2 px-4 border">Alias</th>
                                                <th class="py-2 px-4 border">Tipo</th>
                                                <th class="py-2 px-4 border">Número de Viviendas</th>
                                                <th class="py-2 px-4 border">Tipo de Vivienda</th>
                                                <th class="py-2 px-4 border">Ubicación</th>
                                                <th class="py-2 px-4 border">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($desarrollos as $desarrollo)
                                                <tr class="border-t hover:bg-gray-50">
                                                    <td class="py-2 px-4 border">{{ $desarrollo->nombre }}</td>
                                                    <td class="py-2 px-4 border">{{ $desarrollo->alias }}</td>
                                                    <td class="py-2 px-4 border">{{ $desarrollo->tipo_desarrollo }}</td>
                                                    <td class="py-2 px-4 border">{{ $desarrollo->numero_viviendas }}</td>
                                                    <td class="py-2 px-4 border">{{ $desarrollo->tipo_vivienda }}</td>
                                                    <td class="py-2 px-4 border">{{ $desarrollo->municipio }}, {{ $desarrollo->estado }}, {{ $desarrollo->pais }}</td>
                                                    <td class="py-2 px-4 border">
                                                        <div class="flex flex-col gap-2 w-full">
                                                            <a href="{{ route('desarrollos.edit', [$empresa, $desarrollo]) }}" 
                                                               class="w-full px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 text-sm text-center">
                                                                Editar
                                                            </a>
                                                    
                                                            <form action="{{ route('desarrollos.destroy', [$empresa, $desarrollo]) }}" method="POST" class="w-full">
                                                                @csrf @method('DELETE')
                                                                <button type="submit" class="w-full px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 text-sm"
                                                                    onclick="return confirm('¿Seguro que deseas eliminar este desarrollo?')">
                                                                    Eliminar
                                                                </button>
                                                            </form>
                                                    
                                                            <a href="{{ route('visto-bueno.index', ['desarrollo' => $desarrollo->id]) }}" 
                                                               class="w-full px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 text-sm text-center">
                                                                Visto Bueno
                                                            </a>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                            
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
