<?php

namespace App\Http\Livewire\C;

use App\Models\User;
use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {


        return view('livewire.c.sidebar');
    }

    public function logout()
    {
        auth()->logout();

        redirect('login');
    }

}
