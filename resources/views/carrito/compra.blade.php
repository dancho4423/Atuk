<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h2 class="text-center text-2xl font-bold uppercase">Finalizar Compra</h2>

                    <div class="grid md:grid-cols-2 gap-2">
                        {{ Aire::open()->route('cart.compraRealizada') }}
                            <div>
                                {{ Aire::input('nombre','Nombre') }}

                                {{ Aire::input('direccion','Direccion') }}

                                {{ Aire::email('email','Email') }}

                                {{ Aire::number('tarjeta','Numero de Tarjeta') }}

                                {{ Aire::input('fecha_vencimiento','Fecha de Vencimiento')->type('month')->min(date('Y-m'))->max(date('Y-m', strtotime('+10 years'))) }}

                                {{ Aire::number('codigo_seguridad','CVV') }}

                                {{ Aire::submit('Comprar')->class('btn-black') }}

                            </div>
                        {{ Aire::close() }}

                        <div class="mt-6 pl-2">
                            <div class="bg-white overflow-hidden overflow-x-auto shadow-sm">
                                <table class="min-w-full ">
                                    <thead class="border border-black">
                                        <tr>
                                            <th class="font-semibold px-6 py-3 text-left text-xs uppercase tracking-wider border-b border-black">Producto</th>
                                            <th class="font-semibold px-6 py-3 text-left text-xs uppercase tracking-wider border-b border-black">Nombre</th>
                                            <th class="font-semibold px-6 py-3 text-left text-xs uppercase tracking-wider border-b border-black">Precio</th>
                                            <th class="font-semibold px-6 py-3 text-left text-xs uppercase tracking-wider border-b border-black">Cantidad</th>
                                            <th class="font-semibold px-6 py-3 text-left text-xs uppercase tracking-wider border-b border-black">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody class="border border-black">
                                        @foreach (Cart::getContent() as $producto)
                                            <tr>
                                                <td class="px-6 py-4 text-sm text-gray-500 border-b border-black">
                                                    <img src="{{ asset('img/productos/'.$producto->attributes->imagen) }}" alt="" width="100px" height="100px">
                                                </td>
                                                <td class="px-6 py-4 text-sm text-gray-800 border-b border-black">{{ $producto->name }}</td>
                                                <td class="px-6 py-4 text-sm text-gray-800 border-b border-black">${{ $producto->price }}</td>
                                                <td class="px-6 py-4 text-sm text-gray-800 border-b border-black">{{ $producto->quantity }}</td>
                                                <td class="px-6 py-4 text-sm text-gray-800 border-b border-black">${{ $producto->price * $producto->quantity }}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-2">
                                <p><strong>Total: </strong> ${{ Cart::getTotal() }}</p>
                            </div>
                        </div>


                    </div>



                </div>
            </div>
        </div>
    </div>

</x-app-layout>
