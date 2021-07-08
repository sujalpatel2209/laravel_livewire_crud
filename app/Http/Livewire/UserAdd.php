<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserAdd extends Component
{

    public $name;

    public function render()
    {
        return view('livewire.user-add');
    }
}
