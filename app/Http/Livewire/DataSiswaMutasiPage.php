<?php

namespace App\Http\Livewire;

use App\Models\DataSiswa;
use App\Models\DataSiswaMutasi;
use Livewire\Component;
use Livewire\WithFileUploads;

class DataSiswaMutasiPage extends Component
{
    public function render()
    {
        $this->siswas = DataSiswa::where('status_siswa', 'aktif')->where('status', '!=', 'ditolak')->latest()->get();
        $this->datas = DataSiswaMutasi::latest()->get();
        return view('livewire.data-siswa-mutasi-page')->layout('app');
    }

    use WithFileUploads;

    public $buatPage = false;

    public function buatPageTrue()
    {
        $this->buatPage = true;
    }

    public $data_siswa_id;
    public $mutasi;
    public $tanggal;
    public $asal;
    public $tujuan;
    public $kelas;
    public $no_surat_pindah;
    public $keterangan;

    public function buat()
    {
        DataSiswaMutasi::create([
            'data_siswa_id' => $this->data_siswa_id,
            'mutasi' => $this->mutasi,
            'tanggal' => $this->tanggal,
            'asal' => $this->asal,
            'tujuan' => $this->tujuan,
            'kelas' => $this->kelas,
            'no_surat_pindah' => $this->no_surat_pindah,
            'keterangan' => $this->keterangan,
            'status' => 'pending',
        ]);

        $this->buatPage = false;
        $this->emit('success', ['pesan' => 'Berhasil buat']);
    }

    public function setujui($id)
    {
        DataSiswaMutasi::find($id)->update([
            'status' => 'disetujui',
        ]);
        $this->emit('success', ['pesan' => 'Berhasil setujui']);
    }

    public function tolak($id)
    {
        DataSiswaMutasi::find($id)->update([
            'status' => 'ditolak',
        ]);
        $this->emit('success', ['pesan' => 'Berhasil tolak']);
    }
}
