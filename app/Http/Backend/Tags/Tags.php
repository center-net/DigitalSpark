<?php

namespace App\Http\Backend\Tags;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Tag;

class Tags extends Component
{
    use WithPagination;

    public function render()
    {
        return view('backend.tags.tags',[
            'tags'=> Tag::withCount('products')->paginate(15),
        ]);
    }
}
