<x-app-layout>

    <x-slot name="headerCategorias">
        <div class="uppercase text-xl text-gray-800 leading-tight flex justify-center items-center gap-2 overflow-hidden overflow-x-auto">
            @foreach ($categorias as $categoria)
                <a href="{{ route('inicio.productosPorCategoria',$categoria->id) }}">
                    {{ $categoria->nombre }}
                </a>
                <div>
                    |
                </div>
            @endforeach
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h2 class="text-center text-2xl font-bold uppercase">Producto de {{ env('APP_NAME') }}</h2>

                    <div class="md:flex mt-4 gap-2">

                        <div class="w-full md:w-1/2 mt-3 flex justify-center items-center">
                            <img src="{{ asset('img/productos/'.$producto->imagen) }}" alt="{{ $producto->imagen }}" class="mt-2 w-[400px] h-[400px]">
                        </div>

                        <div class="w-full md:w-1/2 mt-3">

                            <h3 class="font-bold text-gray-900">Nombre</h3>
                            <p class="mb-6">{{ $producto->nombre }}</p>

                            <h3 class="font-bold text-gray-900">Precio</h3>
                            <p class="mb-6">{{ $producto->precio }}</p>

                            <h3 class="font-bold text-gray-900">Inventario</h3>
                            <p class="mb-6">{{ $producto->inventario }}</p>

                            <h3 class="font-bold text-gray-900">Descripcion</h3>
                            <p class="mb-6">{{ $producto->descripcion }}</p>

                            {{ Aire::open()->route('cart.add') }}

                                {{ Aire::hidden('id')->value($producto->id) }}

                                {{ Aire::number('cantidad')->min(1)->max($producto->inventario)->label('Cantidad') }}

                                <div class="flex justify-center mt-6">
                                    {{ Aire::submit('Agregar al carrito')->class('btn-black') }}
                                </div>

                            {{ Aire::close() }}

                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>
