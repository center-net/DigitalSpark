<?php

namespace App\Http\Backend\Users;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    use WithPagination;

    public function render()
    {
        return view('backend.users.users',[
            'users'=> User::with('role')->paginate(15),
        ]);
    }
}
