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

    public function delete($id)
    {
        User::find($id)->delete();
    }

    public function editRecord($id)
    {
        $this->emit('editUser');
    }
}
