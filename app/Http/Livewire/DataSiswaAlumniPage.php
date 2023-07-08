<?php

namespace App\Http\Livewire;

use App\Models\DataSiswa;
use Livewire\Component;

class DataSiswaAlumniPage extends Component
{
    public $cari;
    public function render()
    {
        $data = DataSiswa::where('status_siswa', 'alumni')->latest();
        if ($this->cari) {
            $data->where('nama', 'like', '%' . $this->cari . '%')->orWhere('no_induk', 'like', '%' . $this->cari . '%')->orWhere('nisn', 'like', '%' . $this->cari . '%');
        }
        $this->datas = $data->get();

        return view('livewire.data-siswa-alumni-page')->layout('app');
    }
}
