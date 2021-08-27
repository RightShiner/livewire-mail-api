<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Produk') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="px-4 py-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">

            {{ $nama_produk }}
            <input wire:model="nama_produk" class="form-input px-4 py-2 border w-full rounded-md"
                placeholder="Inputkan Nama Produk">
            {{ $harga }}
            <input wire:model="harga" class="form-input px-4 py-2 border w-full rounded-md"
                placeholder="Inputkan Harga">
            {{ $bobot }}
            <input wire:model="bobot" class="form-input px-4 py-2 border w-full rounded-md"
                placeholder="Inputkan Bobot Produk">

            <div class="flex justify-end">

                <button wire:click="createProduk"
                    class="px-4 py-2 bg-blue-600 text-white hover:bg-blue-400 rounded-md">Save</button>
            </div>
            <livewire:list-produk />
        </div>
    </div>
</div>
