<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 ">

                    {{ Aire::open()->route('autk.update',1) }}

                    <h2 class="text-2xl uppercase font-bold mb-6 pb-4 text-center border-b border-gray-800">Autk</h2>

                    <div class="grid md:grid-cols-2 gap-2 border-b border-gray-800 mb-2">


                        {{ Aire::number('celular','Numero celular')->value($autk->celular) }}
                        {{ Aire::number('telefono','Numero telefono')->value($autk->telefono) }}

                        {{ Aire::email('email','Email')->value($autk->email) }}
                        {{ Aire::input('direccion','Direccion')->value($autk->direccion) }}

                    </div>

                    <h2 class="text-xl uppercase text-center font-bold mb-4">Redes Sociales</h2>

                    <div class="grid md:grid-cols-2 gap-2 mb-2">

                        {{ Aire::input('whatsapp','WhatsApp')->value($autk->whatsapp) }}
                        {{ Aire::input('instagram','Instagram')->value($autk->instagram) }}
                        {{ Aire::input('twitter','Twitter')->value($autk->twitter) }}
                        {{ Aire::input('facebook','Facebook')->value($autk->facebook) }}

                    </div>

                    <div class="flex justify-end gap-2 mt-6">
                        {{ Aire::submit('Editar')->class('btn-green') }}
                    </div>

                    {{ Aire::close() }}

                </div>
            </div>
        </div>
    </div>



</x-app-layout>
