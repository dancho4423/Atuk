<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorias') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="flex justify-end">
                        <a href="{{ route('categorias.create') }}" class="btn-green">Nuevo</a>
                    </div>

                    <div class="container mx-auto py-6">
                        <div class="w-full">
                            <div class="bg-white overflow-hidden overflow-x-auto shadow-sm sm:rounded-lg">
                                <table class=" min-w-full">
                                <thead>
                                    <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Descripción</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorias as $categoria)
                                        <tr class="border-t border-gray-200">
                                            <td class="px-6 py-4 text-sm text-gray-500">{{ $categoria->nombre }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-500">{{ $categoria->descripcion }}</td>
                                            <td class="px-6 py-4 text-sm flex justify-end gap-2">
                                                <a href="{{ route('categorias.edit',$categoria) }}" class="btn-blue">Editar</a>

                                                <form action="{{ route('categorias.destroy',$categoria) }}" class="btn-red" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button  onclick="return confirm('¿Seguro que quiere eliminar esta categoría?')" type="submit">Eliminar</button>
                                                </form>

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

</x-app-layout>
