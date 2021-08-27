<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Livewire\Component;

class CreateProduk extends Component
{
    public $nama_produk, $harga, $bobot, $gambar;
    public function render()
    {
        return view('livewire.create-produk');
    }
    public function createProduk()
    {
        Produk::create([
            'nama_produk' => $this->nama_produk,
            'gambar' => $this->gambar,
            'harga' => $this->harga,
            'bobot' => $this->bobot,
            'status' => 1,
        ]);
        $this->nama_produk = "";
        $this->harga = "";
        $this->bobot = "";
        $this->emit('save-produk');
    }
}
