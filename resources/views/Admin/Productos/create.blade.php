<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{ Aire::open()->route('productos.store')->enctype('multipart/form-data') }}

                    <div class="grid grid-cols-2 gap-2">


                        {{ Aire::input('nombre','Nombre') }}

                        {{ Aire::number('inventario','Inventario') }}

                        {{ Aire::number('precio','Precio') }}

                        {{ Aire::select([$categorias->pluck('nombre','id')],'categoria_id','Categorias') }}

                        {{ Aire::file('img','Imagen') }}

                    </div>

                    <div>
                        {{ Aire::textarea('descripcion','Descripcion')->groupClass('mt-6') }}
                    </div>

                    <div class="flex justify-end gap-2 mt-6">
                        <a href="{{ route('productos.index') }}" class="btn-gray">Regresar</a>
                        {{ Aire::submit('Crear')->class('btn-green') }}
                    </div>

                    {{ Aire::close() }}

                </div>
            </div>
        </div>
    </div>



</x-app-layout>
