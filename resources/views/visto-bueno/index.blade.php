<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Solicitudes Visto Bueno') }}
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
                                        <h1 class="text-2xl font-semibold">Solicitudes de Visto Bueno para {{ $desarrollo->alias }}</h1>
                                        <a href="{{ route('visto-bueno.create', ['desarrollo' => $desarrollo->id]) }}" 
                                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                            Nueva Solicitud
                                        </a>
                                    </div>

                                    @if(session('success'))
                                        <div class="p-4 mb-4 text-green-800 bg-green-100 rounded-lg">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    @if($solicitudes->isEmpty())
                                        <p class="text-gray-600">No hay solicitudes de visto bueno registradas para este desarrollo.</p>
                                    @else
                                        <table class="w-full border border-gray-200 rounded-md">
                                            <thead>
                                                <tr class="bg-gray-100 text-left">
                                                    <th class="py-2 px-4 border">Expediente</th>
                                                    <th class="py-2 px-4 border">Empresa</th>
                                                    <th class="py-2 px-4 border">Alias Desarrollo</th>
                                                    <th class="py-2 px-4 border">Apoderado Legal</th>
                                                    <th class="py-2 px-4 border">Fecha de Solicitud</th>
                                                    <th class="py-2 px-4 border">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($solicitudes as $solicitud)
                                                    <tr class="border-t hover:bg-gray-50">
                                                        <td class="py-2 px-4 border">{{ $solicitud->numero_expediente }}</td>
                                                        <td class="py-2 px-4 border">{{ $solicitud->desarrollo->empresa->nombre }}</td>
                                                        <td class="py-2 px-4 border">{{ $solicitud->desarrollo->alias }}</td>
                                                        <td class="py-2 px-4 border">{{ $solicitud->representanteLegal->nombre }}</td>
                                                        <td class="py-2 px-4 border">{{ $solicitud->created_at->format('d/m/Y') }}</td>
                                                        <td class="py-2 px-4 border flex flex-col gap-2">
                                                            <a href="{{ route('visto-bueno.edit', ['desarrollo' => $desarrollo->id, 'solicitud' => $solicitud->id]) }}" 
                                                            class="w-full px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 text-sm text-center">
                                                                Editar
                                                            </a>
                                                            <form action="{{ route('visto-bueno.destroy', ['desarrollo' => $desarrollo->id, 'solicitud' => $solicitud->id]) }}" method="POST" class="w-full">
                                                                @csrf @method('DELETE')
                                                                <button type="submit" class="w-full px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 text-sm"
                                                                    onclick="return confirm('¿Seguro que deseas eliminar esta solicitud?')">
                                                                    Eliminar
                                                                </button>
                                                            </form>
                                                            <a href="#" 
                                                                class="w-full px-3 py-1 bg-cyan-700 text-white rounded hover:bg-cyan-600 text-sm text-center">
                                                                    Descargar en Word
                                                            </a>
                                                            <a href="#" 
                                                                class="w-full px-3 py-1 bg-rose-500 text-white rounded hover:bg-rose-600 text-sm text-center">
                                                                    Descargar en PDF
                                                            </a>
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
