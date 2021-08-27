<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Livewire\Component;


class ListProduk extends Component
{
    protected $listeners = ['save-produk' => '$refresh'];
    public function render()
    {
        return view(
            'livewire.list-produk',
            [
                'data' => Produk::latest()->get()
            ]
        );
    }
}
