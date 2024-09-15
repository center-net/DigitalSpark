<?php

namespace App\Http\Backend\ProductCategories;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\ProductCategory;


class ProductCategories extends Component
{
    use WithPagination;
    public function render()
    {
        return view('backend.product-categories.product-categories',[
            'productcategories'=> ProductCategory::withCount('products')->paginate(15),
        ]);
    }
}
