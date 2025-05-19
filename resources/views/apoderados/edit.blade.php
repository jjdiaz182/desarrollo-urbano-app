<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Apoderado Legal') }}
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
                                    <h1 class="text-2xl font-semibold mb-4">Editar Apoderado Legal de {{ $empresa->nombre }}</h1>

                                    @if ($errors->any())
                                        <div class="mb-4 p-4 text-red-800 bg-red-100 rounded-lg">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form action="{{ route('apoderados.update', ['empresa' => $empresa->id, 'apoderado' => $apoderado->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="grid grid-cols-2 gap-4">
                                            <div>
                                                <label class="block font-medium text-gray-700">Nombre Completo</label>
                                                <input type="text" name="nombre" value="{{ old('nombre', $apoderado->nombre) }}" required 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>

                                            <div>
                                                <label class="block font-medium text-gray-700">Sexo</label>
                                                <select name="sexo" required class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                                    <option value="Masculino" {{ $apoderado->sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                                    <option value="Femenino" {{ $apoderado->sexo == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                                                    <option value="Otro" {{ $apoderado->sexo == 'Otro' ? 'selected' : '' }}>Otro</option>
                                                </select>
                                            </div>

                                            <div>
                                                <label class="block font-medium text-gray-700">RFC</label>
                                                <input type="text" name="rfc" value="{{ old('rfc', $apoderado->rfc) }}" required 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>

                                            <div>
                                                <label class="block font-medium text-gray-700">CURP</label>
                                                <input type="text" name="curp" value="{{ old('curp', $apoderado->curp) }}" required 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>

                                            <div>
                                                <label class="block font-medium text-gray-700">Prefijo</label>
                                                <input type="text" name="prefijo" value="{{ old('prefijo', $apoderado->prefijo) }}" placeholder="Ej: Sr., Dra., Lic." 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>

                                            <div>
                                                <label class="block font-medium text-gray-700">Título</label>
                                                <input type="text" name="titulo" value="{{ old('titulo', $apoderado->titulo) }}" placeholder="Ej: Abogado, Contador" 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>

                                            <div>
                                                <label class="block font-medium text-gray-700">Cédula Profesional</label>
                                                <input type="text" name="cedula" value="{{ old('cedula', $apoderado->cedula) }}" 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>

                                            <div>
                                                <label class="block font-medium text-gray-700">Teléfono</label>
                                                <input type="text" name="telefono" value="{{ old('telefono', $apoderado->telefono) }}" 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>

                                            <div>
                                                <label class="block font-medium text-gray-700">Correo Electrónico</label>
                                                <input type="email" name="correo" value="{{ old('correo', $apoderado->correo) }}" 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>

                                            <div>
                                                <label class="block font-medium text-gray-700">Fecha de Nacimiento</label>
                                                <input type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $apoderado->fecha_nacimiento) }}" 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>

                                            <div class="col-span-2">
                                                <label class="block font-medium text-gray-700">Dirección</label>
                                                <textarea name="direccion" rows="3" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">{{ old('direccion', $apoderado->direccion) }}</textarea>
                                            </div>
                                        </div>

                                        <div class="mt-6 flex gap-4">
                                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                                Actualizar
                                            </button>
                                            <a href="{{ route('apoderados.index', ['empresa' => $empresa->id]) }}" 
                                            class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
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
