<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Compras") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-center text-2xl font-bold uppercase">Compras</h2>
                    <div class="container mx-auto py-6">
                        <div class="w-full">
                            <div class="bg-white overflow-hidden overflow-x-auto shadow-sm sm:rounded-lg">
                                <table class=" min-w-full">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Correo</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($compras as $compra)
                                        <tr class="border-t border-gray-200">
                                            <td class="px-6 py-4 text-sm text-gray-500">{{ $compra->nombre }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-500">{{ $compra->email }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-500">{{ $compra->total }}</td>
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
