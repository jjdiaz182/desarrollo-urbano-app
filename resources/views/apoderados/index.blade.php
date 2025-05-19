<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Apoderados Legales') }}
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
                                        <h1 class="text-2xl font-semibold">Apoderados Legales de {{ $empresa->nombre }}</h1>
                                        <a href="{{ route('apoderados.create', ['empresa' => $empresa->id]) }}" 
                                           class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                            Agregar Apoderado
                                        </a>
                                    </div>
                            
                                    @if(session('success'))
                                        <div class="p-4 mb-4 text-green-800 bg-green-100 rounded-lg">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                            
                                    @if($apoderados->isEmpty())
                                        <p class="text-gray-600">No hay apoderados legales registrados para esta empresa.</p>
                                    @else
                                        <table class="w-full border border-gray-200 rounded-md">
                                            <thead>
                                                <tr class="bg-gray-100 text-left">
                                                    <th class="py-2 px-4 border">Nombre</th>
                                                    <th class="py-2 px-4 border">Sexo</th>
                                                    <th class="py-2 px-4 border">RFC</th>
                                                    <th class="py-2 px-4 border">CURP</th>
                                                    <th class="py-2 px-4 border">Prefijo</th>
                                                    <th class="py-2 px-4 border">Título</th>
                                                    <th class="py-2 px-4 border">Cédula</th>
                                                    <th class="py-2 px-4 border">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($apoderados as $apoderado)
                                                    <tr class="border-t hover:bg-gray-50">
                                                        <td class="py-2 px-4 border">{{ $apoderado->nombre }}</td>
                                                        <td class="py-2 px-4 border">{{ $apoderado->sexo }}</td>
                                                        <td class="py-2 px-4 border">{{ $apoderado->rfc }}</td>
                                                        <td class="py-2 px-4 border">{{ $apoderado->curp }}</td>
                                                        <td class="py-2 px-4 border">{{ $apoderado->prefijo }}</td>
                                                        <td class="py-2 px-4 border">{{ $apoderado->titulo }}</td>
                                                        <td class="py-2 px-4 border">{{ $apoderado->cedula }}</td>
                                                        <td class="py-2 px-4 border flex flex-col gap-2">
                                                            <a href="{{ route('apoderados.edit', ['empresa' => $empresa->id, 'apoderado' => $apoderado->id]) }}" 
                                                               class="w-full px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 text-sm text-center">
                                                                Editar
                                                            </a>
                                                            <form action="{{ route('apoderados.destroy', ['empresa' => $empresa->id, 'apoderado' => $apoderado->id]) }}" method="POST" class="w-full">
                                                                @csrf @method('DELETE')
                                                                <button type="submit" class="w-full px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 text-sm"
                                                                    onclick="return confirm('¿Seguro que deseas eliminar este apoderado?')">
                                                                    Eliminar
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
