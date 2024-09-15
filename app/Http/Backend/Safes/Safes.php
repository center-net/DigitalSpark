<?php

namespace App\Http\Backend\Safes;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Safe;

class Safes extends Component
{
    use WithPagination;

    public function render()
    {
        return view('backend.safes.safes',[
            'safes'=> Safe::paginate(15),
        ]);
    }
}
