<?php

namespace App\Http\Livewire\C;

use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.c.navbar');
    }

    public function logout()
    {
        auth()->logout();

        redirect('login');
    }
}
