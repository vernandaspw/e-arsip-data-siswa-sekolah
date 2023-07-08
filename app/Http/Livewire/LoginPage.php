<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LoginPage extends Component
{
    public function render()
    {
        return view('livewire.login-page')->layout('app');
    }

    public $username, $password;

    public function login()
    {
        $akun = User::where('username', $this->username)->first();
        if ($akun) {
            if (Hash::check($this->password, $akun->password)) {
                if ($akun->aktif) {
                    auth()->login($akun, true);
                    redirect('/');
                } else {
                    $this->emit('error', ['pesan' => 'Akun tidak aktif']);
                }
            } else {
                $this->emit('error', ['pesan' => 'Password salah']);
            }
        } else {
            $this->emit('error', ['pesan' => 'Akun tidak ditemukan']);
        }
    }
}
