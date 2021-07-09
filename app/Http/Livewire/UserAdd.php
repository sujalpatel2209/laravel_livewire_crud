<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserAdd extends Component
{

    public $form = [
        'name' => null,
        'email' => null,
        'password' => null
    ];

    public function create()
    {
        $this->validate([
            'form.name' => 'required|min:3',
            'form.email' => 'required|email',
            'form.password' => 'required|min:6',
        ]);

        User::create([
            'name' => $this->form['name'],
            'email' => $this->form['email'],
            'password' => bcrypt($this->form['password'])
        ]);

        $this->clearFormData();
        return redirect()->route('user');
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'form.name' => 'required|min:3',
            'form.email' => 'required|email',
            'form.password' => 'required|min:6',
        ]);
    }

    protected function clearFormData()
    {
        $this->form = [
            'name' => null,
            'email' => null,
            'password' => null
        ];
    }

    public function render()
    {
        return view('livewire.user-add');
    }
}
