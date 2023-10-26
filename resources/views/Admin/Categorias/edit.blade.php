<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{ Aire::open()->route('categorias.update',$categoria) }}

                    <div class="grid grid-col-2 gap-2">


                        {{ Aire::input('nombre','Nombre')->groupClass('w-1/2')->value($categoria->nombre) }}

                        {{ Aire::textarea('descripcion','Descripcion')->groupClass('mt-6')->value($categoria->descripcion) }}

                    </div>

                    <div class="flex justify-end gap-2 mt-6">
                        <a href="{{ route('categorias.index') }}" class="btn-gray">Regresar</a>
                        {{ Aire::submit('Editar')->class('btn-green') }}
                    </div>

                    {{ Aire::close() }}

                </div>
            </div>
        </div>
    </div>



</x-app-layout>
