<?php

namespace App\Http\Backend\Products;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    use WithPagination;

    public function render()
    {
        return view('backend.products.products',[
            'products'=> Product::with('category', 'tags', 'firstMedia')->paginate(15),
        ]);
    }
}
