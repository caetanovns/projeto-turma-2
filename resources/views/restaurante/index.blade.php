<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Restaurantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <table class="min-w-full  shadow-md rounded-lg overflow-hidden">
                            <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="py-3 px-4 text-left">Nome</th>
                                <th class="py-3 px-4 text-left">Razão Social</th>
                                <th class="py-3 px-4 text-left">Telefone</th>
                                <th class="py-3 px-4 text-left">Gerente</th>
                                <th class="py-3 px-4 text-left">Aberto</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach($restaurantes as $restaurante)
                                    <tr>
                                        <td class="py-3 px-4">{{$restaurante->nome_fantasia}}</td>
                                        <td class="py-3 px-4">{{$restaurante->razao_social}}</td>
                                        <td class="py-3 px-4">{{$restaurante->telefone}}n</td>
                                        <td class="py-3 px-4">{{$restaurante->gerente}}</td>
                                        <td class="py-3 px-4">{{$restaurante->is_aberto}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
