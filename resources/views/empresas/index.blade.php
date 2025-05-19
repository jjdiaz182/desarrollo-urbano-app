<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empresas') }}
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
                                        <h1 class="text-2xl font-semibold">Lista de Empresas</h1>
                                        <a href="{{ route('empresas.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Crear Empresa</a>
                                    </div>
                            
                                    @if(session('success'))
                                        <div class="p-4 mb-4 text-green-800 bg-green-100 rounded-lg">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                            
                                    <div class="overflow-x-auto">
                                        <table class="w-full border border-gray-200 rounded-md">
                                            <thead>
                                                <tr class="bg-gray-100 text-left">
                                                    <th class="py-2 px-4 border">Nombre</th>
                                                    <th class="py-2 px-4 border">Calle</th>
                                                    <th class="py-2 px-4 border">Código Postal</th>
                                                    <th class="py-2 px-4 border">Colonia</th>
                                                    <th class="py-2 px-4 border">Ciudad</th>
                                                    <th class="py-2 px-4 border">Estado</th>
                                                    <th class="py-2 px-4 border">País</th>
                                                    <th class="py-2 px-4 border">Teléfono</th>
                                                    <th class="py-2 px-4 border">RFC</th>
                                                    <th class="py-2 px-4 border">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($empresas as $empresa)
                                                    <tr class="border-t hover:bg-gray-50">
                                                        <td class="py-2 px-4 border">{{ $empresa->nombre }}</td>
                                                        <td class="py-2 px-4 border">{{ $empresa->calle }}</td>
                                                        <td class="py-2 px-4 border">{{ $empresa->codigo_postal }}</td>
                                                        <td class="py-2 px-4 border">{{ $empresa->colonia }}</td>
                                                        <td class="py-2 px-4 border">{{ $empresa->ciudad }}</td>
                                                        <td class="py-2 px-4 border">{{ $empresa->estado }}</td>
                                                        <td class="py-2 px-4 border">{{ $empresa->pais }}</td>
                                                        <td class="py-2 px-4 border">{{ $empresa->telefono }}</td>
                                                        <td class="py-2 px-4 border">{{ $empresa->rfc }}</td>
                                                        <td class="py-2 px-4 border">
                                                            <div class="flex flex-col gap-2 w-full">
                                                                <a href="{{ route('empresas.edit', $empresa) }}" 
                                                                   class="w-full px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 text-sm text-center">
                                                                    Editar
                                                                </a>
                                                        
                                                                <form action="{{ route('empresas.destroy', $empresa) }}" method="POST" class="w-full">
                                                                    @csrf @method('DELETE')
                                                                    <button type="submit" class="w-full px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 text-sm"
                                                                        onclick="return confirm('¿Seguro que deseas eliminar esta empresa?')">
                                                                        Eliminar
                                                                    </button>
                                                                </form>
                                                        
                                                                <a href="{{ route('desarrollos.index', ['empresa' => $empresa->id]) }}" 
                                                                   class="w-full px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600 text-sm text-center">
                                                                    Desarrollos
                                                                </a>

                                                                <a href="{{ route('apoderados.index', ['empresa' => $empresa->id]) }}" 
                                                                    class="w-full px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 text-sm text-center">
                                                                     Apoderados Legales
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
    </div>
</x-app-layout>
