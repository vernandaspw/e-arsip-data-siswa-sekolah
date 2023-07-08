<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ProfilPage extends Component
{
    public function render()
    {
        return view('livewire.profil-page')->layout('app');
    }

    public $nama, $username;

    public function mount()
    {
        $data = User::find(auth()->user()->id);

        $this->username = $data->username;
        $this->nama = $data->nama;
    }

    public function simpan()
    {
        $data = User::find(auth()->user()->id);
        $data->update([
            'nama' => $this->nama,
            'username' => $this->username,
        ]);

        $this->emit('success', ['pesan' => 'Berhasil perbarui']);
    }
}
