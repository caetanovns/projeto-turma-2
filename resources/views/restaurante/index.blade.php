<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Restaurantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end">
                    <a class="m-4 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                        href="{{ route('restaurantes.create') }}">Adicionar</a>
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <table class="min-w-full  shadow-md rounded-lg overflow-hidden">
                            <thead class="bg-gray-200 text-gray-700">
                                <tr>
                                    <th class="py-3 px-4 text-left">Nome</th>
                                    <th class="py-3 px-4 text-left">Razão Social</th>
                                    <th class="py-3 px-4 text-left">Telefone</th>
                                    <th class="py-3 px-4 text-left">Gerente</th>
                                    <th class="py-3 px-4 text-center">Aberto</th>
                                    <th class="py-3 px-4 text-center">Ações</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach($restaurantes as $restaurante)
                                <tr>
                                    <td class="py-3 px-4">{{$restaurante->nome_fantasia}}</td>
                                    <td class="py-3 px-4">{{$restaurante->razao_social}}</td>
                                    <td class="py-3 px-4">{{$restaurante->telefone}}</td>
                                    <td class="py-3 px-4">{{$restaurante->gerente}}</td>
                                    <td class="py-3 px-4 text-center">
                                        @if($restaurante->is_aberto)
                                        <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-green-900 dark:text-green-300">
                                            ABERTO
                                        </span>
                                        @else
                                        <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-red-900 dark:text-red-300">
                                            FECHADO
                                        </span>
                                        @endif
                                    </td>
                                    <td class="flex justify-between p-2">
                                        <a href="{{route('restaurantes.show', $restaurante->id)}}" class="flex items-center justify-center p-2 rounded bg-blue-500 hover:bg-blue-600 text-white">
                                            <!-- Icon goes here -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <form method="POST" action="{{route('restaurantes.destroy',$restaurante->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="flex items-center justify-center p-2 rounded bg-red-500 hover:bg-red-600 text-white">
                                                <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
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