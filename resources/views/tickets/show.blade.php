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
                    <h3>{{ $ticket->title }}</h3>
                    <p>{{ $ticket->description }}</p>
                    <p>Status: {{ $ticket->status }}</p>
                    <a href="{{ route('tickets.edit', $ticket->id) }}" class="btn btn-primary">Editar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
