<x-app-layout>
 <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalhes do Ticket') }} 
        </h2> 
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-200">Título: {{ $ticket->title }}</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Protocolo: {{ $ticket->id }}</p>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Criador: {{ Auth::user()->name }}</p>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Descrição: {{ $ticket->description }}</p>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Status: {{ ucfirst($ticket->status) }}</p>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Data criada: {{ $ticket->created_at }}</p>
                    <br>
                    @if (strtolower($ticket->status) !== 'fechado')
                        <a href="{{ route('tickets.edit', $ticket->id) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Editar</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
