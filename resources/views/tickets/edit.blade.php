<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Ticket') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-12">
        <form action="{{ route('tickets.update', $ticket->id) }}" method="POST" class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg p-6">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Título</label>
                <input id="title" class="block mt-1 w-full form-input" type="text" name="title" value="{{ old('title', $ticket->title) }}" required autofocus />
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Descrição</label>
                <textarea id="description" name="description" rows="5" class="form-textarea mt-1 block w-full" required>{{ old('description', $ticket->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">{{ __('Atualizar') }}</button>
        </form>
    </div>
</x-app-layout>
