<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Meus Tickets') }}
        </h2>
        <br>
        <a href="{{ route('tickets.create') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-3">Novo Ticket</a>
    </x-slot>

    <div class="container mx-auto py-12">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 leading-tight mb-4">
            {{ __('Tickets Abertos') }}
        </h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
            @forelse ($openTickets as $ticket)
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg relative" style="margin-bottom: 20px;">
                    <button onclick="confirmCloseTicket('{{ route('tickets.close', $ticket->id) }}')" class="absolute top-2 right-2 text-red-500 hover:text-red-700">X</button>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-200">Título: {{ $ticket->title }}</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Protocolo: {{ $ticket->id }}</p>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Criador: {{ Auth::user()->name }}</p>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Descrição: {{ $ticket->description }}</p>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Status: {{ ucfirst($ticket->status) }}</p>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Data criada: {{ $ticket->created_at }}</p>
                        <br>
                        <a href="{{ route('tickets.show', $ticket->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 inline-block">Ver detalhes</a>
                    </div>
                </div>
            @empty
                <p class="text-gray-600 dark:text-gray-400">Nenhum ticket aberto encontrado.</p>
            @endforelse
        </div>
        
        <br>
        
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 leading-tight mb-4">
            {{ __('Tickets Encerrados') }}
        </h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @forelse ($closedTickets as $ticket)
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-200">Título: {{ $ticket->title }}</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Protocolo: {{ $ticket->id }}</p>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Criador: {{ Auth::user()->name }}</p>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Descrição: {{ $ticket->description }}</p>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Status: {{ ucfirst($ticket->status) }}</p>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Data criada: {{ $ticket->created_at }}</p>
                        <br>
                        <a href="{{ route('tickets.show', $ticket->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 inline-block">Ver detalhes</a>
                    </div>
                </div>
            @empty
                <p class="text-gray-600 dark:text-gray-400">Nenhum ticket encerrado encontrado.</p>
            @endforelse
        </div>
    </div>

    <script>
        function confirmCloseTicket(url) {
            if (confirm('Você realmente quer encerrar este ticket?')) {
                window.location.href = url;
            }
        }
    </script>
</x-app-layout>
