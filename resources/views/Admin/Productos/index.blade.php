<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="flex justify-end">
                        <a href="{{ route('productos.create') }}" class="btn-green">Nuevo</a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">

                        @foreach ($productos as $producto)

                            <div class="bg-white shadow-md rounded-md overflow-hidden">
                                <img src="{{ asset('img/productos/'.$producto->imagen) }}" alt="Producto" class="w-full object-cover">
                                <div class="p-4">
                                    <h2 class="text-xl font-semibold text-gray-800">{{ $producto->categoria->nombre }}</h2>
                                    <h3 class="text-sm text-gray-700">Nombre: {{ $producto->nombre }}</h3>
                                    <p class="text-sm text-gray-600">Inventario: {{ $producto->inventario }} unidades</p>
                                    <p class="text-sm text-gray-600">Precio: ${{ $producto->precio }}</p>
                                    <p class="text-sm text-gray-600">Descripción del producto: {{ $producto->descripcion }}.</p>
                                    <div class="mt-4 flex justify-end gap-2">

                                        <a href="{{ route('productos.edit',$producto) }}" class="btn-blue">Editar</a>

                                        <form action="{{ route('productos.destroy',$producto) }}" class="btn-red" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button  onclick="return confirm('¿Seguro que quiere eliminar este producto?')" type="submit">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>




                </div>
            </div>
        </div>
    </div>

</x-app-layout>
