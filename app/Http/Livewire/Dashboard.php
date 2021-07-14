<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{

    public $count;

    public function render()
    {
        $this->count = User::count();
        return view('livewire.dashboard');
    }
}
