<?php

namespace App\Http\Livewire;

use App\Models\Product as ModelsProduct;
use Livewire\Component;

class Product extends Component
{    

    public $seleccionado = '';
    public $products;

    public function mount() {
        $this->products = [];
    }

    public function render()
    {
        $this->products = ModelsProduct::all();

        return view('livewire.product');
    }
}
