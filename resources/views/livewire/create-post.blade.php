<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Post') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="px-4 py-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
            {{ $body }}
            <textarea wire:model="body" class="shadow appearence-none border
            rounded w-full text-grey-700 leading-tight focus:outline-none focus:shadow-outline" rows="4"
                placeholder="Ketik Sesuatu..."></textarea>
            <div class="flex justify-end">
                <button wire:click="createPost"
                    class="px-4 py-2 bg-blue-600 text-white hover:bg-blue-400 rounded-md">Post</button>
            </div>
            <livewire:list-post />
        </div>
    </div>
</div>
