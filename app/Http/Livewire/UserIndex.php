<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    public $users;

    public function render()
    {
        $this->users = User::orderBy('created_at','DESC')->get();
        return view('livewire.user-index');
    }
}
