<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h2 class="text-center text-2xl font-bold uppercase">Carrito</h2>

                    <div class="mt-4">
                        @if (count(Cart::getContent()) == 0)
                            <h3 class="text-center">Carrito Vacio</h3>
                        @else

                        <div class="container mx-auto py-6">
                            <div class="w-full">
                                <div class="bg-white overflow-hidden overflow-x-auto shadow-sm sm:rounded-lg">
                                    <table class="min-w-full">
                                        <thead>
                                            <tr>
                                                <th class="font-semibold px-6 py-3 text-left text-xs uppercase tracking-wider border-b border-black">Producto</th>
                                                <th class="font-semibold px-6 py-3 text-left text-xs uppercase tracking-wider border-b border-black">Nombre</th>
                                                <th class="font-semibold px-6 py-3 text-left text-xs uppercase tracking-wider border-b border-black">Precio</th>
                                                <th class="font-semibold px-6 py-3 text-left text-xs uppercase tracking-wider border-b border-black">Cantidad</th>
                                                <th class="font-semibold px-6 py-3 text-left text-xs uppercase tracking-wider border-b border-black">Subtotal</th>
                                                <th class="font-semibold px-6 py-3 text-left text-xs uppercase tracking-wider border-b border-black">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (Cart::getContent() as $producto)
                                                <tr>
                                                    <td class="px-6 py-4 text-sm text-gray-500 border-b border-black">
                                                        <img src="{{ asset('img/productos/'.$producto->attributes->imagen) }}" alt="" width="100px" height="100px">
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-800 border-b border-black">{{ $producto->name }}</td>
                                                    <td class="px-6 py-4 text-sm text-gray-800 border-b border-black">${{ $producto->price }}</td>
                                                    <td class="px-6 py-4 text-sm text-gray-800 border-b border-black">{{ $producto->quantity }}</td>
                                                    <td class="px-6 py-4 text-sm text-gray-800 border-b border-black">${{ $producto->price * $producto->quantity }}</td>
                                                    <td class="px-6 py-4 text-sm text-gray-800 border-b border-black">
                                                        <form action="{{ route('cart.removeitem') }}" method="POST" class="btn-red">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $producto->id }}">
                                                            <button onclick="return confirm('¿Seguro que quiere eliminar esta producto?')" type="submit">Eliminar</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4" class="px-6 py-4 text-sm font-semibold uppercase">Total</td>
                                                <td class="px-6 py-4 text-sm text-gray-900">${{ Cart::getTotal() }}</td>
                                                <td class="px-6 py-4 text-sm text-gray-900">
                                                    <form action="{{ route('cart.clear') }}" method="POST" class="btn-gray">
                                                        @csrf
                                                        <button onclick="return confirm('¿Seguro que quiere vaciar el carrito?')" type="submit">Vaciar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>


                            <div class="mt-4 flex justify-center">
                                <a href="{{ route('cart.compra') }}" class="btn-black">Comprar</a>
                            </div>
                        </div>

                        @endif
                    </div>


                </div>
            </div>
        </div>
    </div>



</x-app-layout>
