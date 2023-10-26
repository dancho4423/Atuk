<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{ Aire::open()->route('productos.update',$producto)->enctype('multipart/form-data') }}

                    <div class="md:flex gap-2">

                        <img src="{{ asset('img/productos/'.$producto->imagen) }}" alt="{{ $producto->imagen }}" class="mt-2">

                        <div class="w-full md:w-1/2 mt-3">

                            {{ Aire::input('nombre','Nombre')->value($producto->nombre) }}

                            {{ Aire::number('precio','Precio')->value($producto->precio) }}

                            {{ Aire::number('inventario','Inventario')->value($producto->inventario) }}

                            {{ Aire::select([$categorias->pluck('nombre','id')],'categoria_id','Categorias')->value($producto->categoria_id) }}

                            {{ Aire::file('img','Imagen') }}

                            {{ Aire::textarea('descripcion','Descripcion')->groupClass('mt-6')->value($producto->descripcion) }}

                        </div>

                    </div>



                    <div class="flex justify-end gap-2 mt-6">
                        <a href="{{ route('productos.index') }}" class="btn-gray">Regresar</a>
                        {{ Aire::submit('Editar')->class('btn-green') }}
                    </div>

                    {{ Aire::close() }}

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
