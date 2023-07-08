<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class KelolaAkunPage extends Component
{
    public $datas = [];
    public function render()
    {
        $this->datas = User::latest()->get();
        return view('livewire.kelola-akun-page')->layout('app');
    }

    public $buatPage = false;

    public function buatPageTrue()
    {
        $this->buatPage = true;
    }

    public $nama, $username, $password, $role;

    public function buat()
    {
        User::create([
            'nama' => $this->nama,
            'username' => $this->username,
            'password' => Hash::make($this->password),
            'role' => $this->role,
        ]);

        $this->emit('success', ['pesan' => 'Berhasil buat']);
    }

    public function ubahStatus($id)
    {
        $user = User::find($id);

        if ($user->aktif) {
            $aktif = false;
        }else{
            $aktif = true;
        }
        $user->update([
            'aktif' => $aktif,
        ]);

        return redirect(request()->header('Referer'));
    }
}
