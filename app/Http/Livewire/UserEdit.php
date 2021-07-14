<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{

    public $userId;
    public $user;

    protected $listeners = [
        'editUser'
    ];

    public function render()
    {
        $this->user = User::find($this->userId);
        return view('livewire.user-edit');
    }

    public function editUser($id)
    {
        dd($id);
        $this->userId = $id;
        return redirect()->route('edit_user', ['id' => $id]);
    }
}
