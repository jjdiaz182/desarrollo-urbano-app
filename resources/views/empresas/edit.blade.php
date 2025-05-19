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
                                    <h1 class="text-2xl font-semibold mb-4">Editar Empresa</h1>
                            
                                    @if ($errors->any())
                                        <div class="mb-4 p-4 text-red-800 bg-red-100 rounded-lg">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                            
                                    <form action="{{ route('empresas.update', $empresa) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                            
                                        <div class="grid grid-cols-2 gap-4">
                                            <div>
                                                <label class="block font-medium text-gray-700">Nombre</label>
                                                <input type="text" name="nombre" value="{{ old('nombre', $empresa->nombre) }}" required 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Calle</label>
                                                <input type="text" name="calle" value="{{ old('calle', $empresa->calle) }}" required 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Código Postal</label>
                                                <input type="text" name="codigo_postal" value="{{ old('codigo_postal', $empresa->codigo_postal) }}" required 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Colonia</label>
                                                <input type="text" name="colonia" value="{{ old('colonia', $empresa->colonia) }}" required 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Ciudad</label>
                                                <input type="text" name="ciudad" value="{{ old('ciudad', $empresa->ciudad) }}" required 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Estado</label>
                                                <input type="text" name="estado" value="{{ old('estado', $empresa->estado) }}" required 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">País</label>
                                                <input type="text" name="pais" value="{{ old('pais', $empresa->pais) }}" required 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Teléfono</label>
                                                <input type="text" name="telefono" value="{{ old('telefono', $empresa->telefono) }}" required 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">RFC</label>
                                                <input type="text" name="rfc" value="{{ old('rfc', $empresa->rfc) }}" required 
                                                    class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300">
                                            </div>
                                        </div>
                            
                                        <div class="mt-6 flex gap-4">
                                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                                Actualizar
                                            </button>
                                            <a href="{{ route('empresas.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
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
