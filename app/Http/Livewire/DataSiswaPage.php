<?php

namespace App\Http\Livewire;

use App\Models\DataSiswa;
use App\Models\DataSiswaLapiran;
use Livewire\Component;
use Livewire\WithFileUploads;

class DataSiswaPage extends Component
{
    public $cari;
    public function render()
    {
        $data = DataSiswa::where('status_siswa', 'aktif')->where('status', '!=', 'ditolak')->latest();

        if ($this->cari) {
            $this->buatPage = false;
            $data->where('nama', 'like', '%' . $this->cari . '%')->orWhere('no_induk', 'like', '%' . $this->cari . '%')->orWhere('nisn', 'like', '%' . $this->cari . '%');
        }

        $this->datas = $data->get();
        return view('livewire.data-siswa-page')->layout('app');
    }

    use WithFileUploads;

    public $buatPage = false;

    public function buatPageTrue()
    {
        $this->buatPage = true;
    }

    public $foto, $no_induk, $nisn, $nama, $nama_wali, $tempat_lahir, $tanggal_lahir, $jeniskelamin, $agama, $no_telp, $tahun_masuk, $tahun_lulus, $status_siswa, $status;
    public $file1, $keterangan1;
    public $file2, $keterangan2;
    public $file3, $keterangan3;
    public $kelas;
    public function buat()
    {
        $this->validate([
            'no_induk' => 'required|numeric',
            'nisn' => 'required|numeric',
            'nama' => 'required|regex:/^[a-zA-Z\s]+$/',
            'nama_wali' => 'required|regex:/^[a-zA-Z\s]+$/',
            'no_telp' => 'required|numeric',

        ]);
        if ($this->foto) {
            $foto = $this->foto->store('img');
        } else {
            $foto = null;
        }

        $data = DataSiswa::create([
            'foto' => $foto,
            'no_induk' => $this->no_induk,
            'nisn' => $this->nisn,
            'nama' => $this->nama,
            'kelas' => $this->kelas,
            'nama_wali' => $this->nama_wali,
            'tempat_lahir' => $this->tempat_lahir,
            'tanggal_lahir' => $this->tanggal_lahir,
            'jeniskelamin' => $this->jeniskelamin,
            'agama' => $this->agama,
            'no_telp' => $this->no_telp,
            'tahun_masuk' => $this->tahun_masuk,
            'status_siswa' => 'aktif',
            'status ' => 'pending',
        ]);
        if ($this->file1) {
            if ($this->keterangan1) {

                $file1 = $this->file1->store('img');
                DataSiswaLapiran::create([
                    'data_siswa_id' => $data->id,
                    'file' => $file1,
                    'keterangan' => $this->keterangan1,
                ]);
            } else {
                $this->emit('error', ['pesan' => 'Keterangan lampiran 1 wajib diisi']);
            }
        }
        if ($this->file2) {
            if ($this->keterangan2) {

                $file2 = $this->file2->store('img');
                DataSiswaLapiran::create([
                    'data_siswa_id' => $data->id,
                    'file' => $file2,
                    'keterangan' => $this->keterangan2,
                ]);
            } else {
                $this->emit('error', ['pesan' => 'Keterangan lampiran 2 wajib diisi']);
            }
        }
        if ($this->file3) {
            if ($this->keterangan3) {
                $file3 = $this->file3->store('img');
                DataSiswaLapiran::create([
                    'data_siswa_id' => $data->id,
                    'file' => $file3,
                    'keterangan' => $this->keterangan3,
                ]);
            } else {
                $this->emit('error', ['pesan' => 'Keterangan lampiran 3 wajib diisi']);
            }
        }

        $this->buatPage = false;
        $this->emit('success', ['pesan' => 'Berhasil buat']);
        return redirect(request()->header('Referer'));
    }

    public function hapus($id)
    {
        DataSiswa::find($id)->delete();
        $this->emit('success', ['pesan' => 'Berhasil hapus data']);
    }

    public function setujui($id)
    {
        DataSiswa::find($id)->update([
            'status' => 'disetujui',
        ]);
        $this->emit('success', ['pesan' => 'Berhasil setujui']);
    }
    public function tolak($id)
    {
        DataSiswa::find($id)->update([
            'status' => 'ditolak',
        ]);
        $this->emit('success', ['pesan' => 'Berhasil tolak']);
    }

    public $ID;
    public $alumniPage = false;

    public function alumniPageTrue($id)
    {
        $this->ID = $id;
        $this->alumniPage = true;
    }

    public function simpanAlumni()
    {
        $id = $this->ID;
        DataSiswa::find($id)->update([
            'tahun_lulus' => $this->tahun_lulus,
            'status_siswa' => 'alumni',
        ]);
        $this->alumniPage = false;
        $this->emit('success', ['pesan' => 'Berhasil tambah ke daftar alumni']);
    }

    public $lampiranPage = false;

    public function lampiranPageTrue($id)
    {
        $this->ID = $id;
        $this->lampiranPage = true;
    }

    public function simpanLampiran()
    {
        if ($this->file) {
            if ($this->keterangan) {
                $file = $this->file->store('img');
                DataSiswaLapiran::create([
                    'data_siswa_id' => $this->ID,
                    'file' => $file,
                    'keterangan' => $this->keterangan,
                ]);
            } else {
                $this->emit('error', ['pesan' => 'Keterangan lampiran wajib diisi']);
            }
        }

        $this->lampiranPage = false;
        $this->emit('success', ['pesan' => 'Berhasil simpan lampiran']);
    }
}
