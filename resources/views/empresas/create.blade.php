<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar Empresa') }}
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
                                    <h1 class="text-2xl font-semibold mb-4">Crear Empresa</h1>
                            
                                    <form action="{{ route('empresas.store') }}" method="POST">
                                        @csrf
                            
                                        <div class="grid grid-cols-2 gap-4">
                                            <div>
                                                <label class="block font-medium text-gray-700">Nombre</label>
                                                <input type="text" name="nombre" required class="w-full px-4 py-2 border rounded-md">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Calle</label>
                                                <input type="text" name="calle" required class="w-full px-4 py-2 border rounded-md">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Código Postal</label>
                                                <input type="text" name="codigo_postal" required class="w-full px-4 py-2 border rounded-md">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Colonia</label>
                                                <input type="text" name="colonia" required class="w-full px-4 py-2 border rounded-md">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Ciudad</label>
                                                <input type="text" name="ciudad" required class="w-full px-4 py-2 border rounded-md">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Estado</label>
                                                <input type="text" name="estado" required class="w-full px-4 py-2 border rounded-md">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">País</label>
                                                <input type="text" name="pais" required class="w-full px-4 py-2 border rounded-md">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">Teléfono</label>
                                                <input type="text" name="telefono" required class="w-full px-4 py-2 border rounded-md">
                                            </div>
                            
                                            <div>
                                                <label class="block font-medium text-gray-700">RFC</label>
                                                <input type="text" name="rfc" required class="w-full px-4 py-2 border rounded-md">
                                            </div>
                                        </div>
                            
                                        <div class="mt-4">
                                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                                Guardar
                                            </button>
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
