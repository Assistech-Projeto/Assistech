<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Meus Tickets') }}
        </h2>
    </x-slot>
    

    <div class="container mx-auto py-12">
       <a href="{{ route('tickets.create') }}" class="btn btn-primary mb-3">Novo Ticket</a> 
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @forelse ($tickets as $ticket)
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-200">Titulo: {{ $ticket->title }}</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Protocolo: {{ $ticket->id }}</p>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Criador: {{ Auth::user()->name }}</p>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Descrição: {{ $ticket->description }}</p>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Status: {{ ucfirst($ticket->status) }}</p>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Data criada: {{ ucfirst($ticket->created_at) }}</p>

                        <a href="{{ route('tickets.show', $ticket->id) }}" class="mt-4 text-sm text-blue-600 dark:text-blue-400 hover:underline">Ver detalhes</a>
                    </div>
                </div>
            @empty
                <p class="text-gray-600 dark:text-gray-400">Nenhum ticket encontrado.</p>
            @endforelse
        </div>
    </div>
</x-app-layout>



