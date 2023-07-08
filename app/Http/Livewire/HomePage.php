<?php

namespace App\Http\Livewire;

use App\Models\DataSiswa;
use App\Models\DataSiswaMutasi;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {

        $this->siswaAktifPending = DataSiswa::where('status_siswa', 'aktif')->where('status','pending')->get()->count();
        // $this->siswaAktifPending1 = DataSiswa::where('status_siswa', 'aktif')->where('status','pending')->whereMonth('created_at', '06')->get()->count();

        $this->siswaAktif = DataSiswa::where('status_siswa', 'aktif')->where('status','disetujui')->get()->count();
        $this->siswaAktif1 = DataSiswa::where('status_siswa', 'aktif')->where('status','disetujui')->whereMonth('created_at', '01')->get()->count();
        $this->siswaAktif2 = DataSiswa::where('status_siswa', 'aktif')->where('status','disetujui')->whereMonth('created_at', '02')->get()->count();
        $this->siswaAktif3 = DataSiswa::where('status_siswa', 'aktif')->where('status','disetujui')->whereMonth('created_at', '03')->get()->count();
        $this->siswaAktif4 = DataSiswa::where('status_siswa', 'aktif')->where('status','disetujui')->whereMonth('created_at', '04')->get()->count();
        $this->siswaAktif5 = DataSiswa::where('status_siswa', 'aktif')->where('status','disetujui')->whereMonth('created_at', '05')->get()->count();
        $this->siswaAktif6 = DataSiswa::where('status_siswa', 'aktif')->where('status','disetujui')->whereMonth('created_at', '06')->get()->count();
        $this->siswaAktif7 = DataSiswa::where('status_siswa', 'aktif')->where('status','disetujui')->whereMonth('created_at', '07')->get()->count();
        $this->siswaAktif8 = DataSiswa::where('status_siswa', 'aktif')->where('status','disetujui')->whereMonth('created_at', '08')->get()->count();
        $this->siswaAktif9 = DataSiswa::where('status_siswa', 'aktif')->where('status','disetujui')->whereMonth('created_at', '09')->get()->count();
        $this->siswaAktif10 = DataSiswa::where('status_siswa', 'aktif')->where('status','disetujui')->whereMonth('created_at', '10')->get()->count();
        $this->siswaAktif11 = DataSiswa::where('status_siswa', 'aktif')->where('status','disetujui')->whereMonth('created_at', '11')->get()->count();
        $this->siswaAktif12 = DataSiswa::where('status_siswa', 'aktif')->where('status','disetujui')->whereMonth('created_at', '12')->get()->count();


        $this->siswaAlumni = DataSiswa::where('status_siswa', 'alumni')->where('status','disetujui')->get()->count();
        $this->siswaAlumni1 = DataSiswa::where('status_siswa', 'alumni')->where('status','disetujui')->whereMonth('created_at', '01')->get()->count();
        $this->siswaAlumni2 = DataSiswa::where('status_siswa', 'alumni')->where('status','disetujui')->whereMonth('created_at', '02')->get()->count();
        $this->siswaAlumni3 = DataSiswa::where('status_siswa', 'alumni')->where('status','disetujui')->whereMonth('created_at', '03')->get()->count();
        $this->siswaAlumni4 = DataSiswa::where('status_siswa', 'alumni')->where('status','disetujui')->whereMonth('created_at', '04')->get()->count();
        $this->siswaAlumni5 = DataSiswa::where('status_siswa', 'alumni')->where('status','disetujui')->whereMonth('created_at', '05')->get()->count();
        $this->siswaAlumni6 = DataSiswa::where('status_siswa', 'alumni')->where('status','disetujui')->whereMonth('created_at', '06')->get()->count();
        $this->siswaAlumni7 = DataSiswa::where('status_siswa', 'alumni')->where('status','disetujui')->whereMonth('created_at', '07')->get()->count();
        $this->siswaAlumni8 = DataSiswa::where('status_siswa', 'alumni')->where('status','disetujui')->whereMonth('created_at', '08')->get()->count();
        $this->siswaAlumni9 = DataSiswa::where('status_siswa', 'alumni')->where('status','disetujui')->whereMonth('created_at', '09')->get()->count();
        $this->siswaAlumni10 = DataSiswa::where('status_siswa', 'alumni')->where('status','disetujui')->whereMonth('created_at', '10')->get()->count();
        $this->siswaAlumni11 = DataSiswa::where('status_siswa', 'alumni')->where('status','disetujui')->whereMonth('created_at', '11')->get()->count();
        $this->siswaAlumni12 = DataSiswa::where('status_siswa', 'alumni')->where('status','disetujui')->whereMonth('created_at', '12')->get()->count();

        $this->siswaMutasiMasuk = DataSiswaMutasi::where('mutasi', 'masuk')->where('status','disetujui')->get()->count();
        $this->siswaMutasiMasuk1 = DataSiswaMutasi::where('mutasi', 'masuk')->where('status','disetujui')->whereMonth('created_at', '01')->get()->count();
        $this->siswaMutasiMasuk2 = DataSiswaMutasi::where('mutasi', 'masuk')->where('status','disetujui')->whereMonth('created_at', '02')->get()->count();
        $this->siswaMutasiMasuk3 = DataSiswaMutasi::where('mutasi', 'masuk')->where('status','disetujui')->whereMonth('created_at', '03')->get()->count();
        $this->siswaMutasiMasuk4 = DataSiswaMutasi::where('mutasi', 'masuk')->where('status','disetujui')->whereMonth('created_at', '04')->get()->count();
        $this->siswaMutasiMasuk5 = DataSiswaMutasi::where('mutasi', 'masuk')->where('status','disetujui')->whereMonth('created_at', '05')->get()->count();
        $this->siswaMutasiMasuk6 = DataSiswaMutasi::where('mutasi', 'masuk')->where('status','disetujui')->whereMonth('created_at', '06')->get()->count();
        $this->siswaMutasiMasuk7 = DataSiswaMutasi::where('mutasi', 'masuk')->where('status','disetujui')->whereMonth('created_at', '07')->get()->count();
        $this->siswaMutasiMasuk8 = DataSiswaMutasi::where('mutasi', 'masuk')->where('status','disetujui')->whereMonth('created_at', '08')->get()->count();
        $this->siswaMutasiMasuk9 = DataSiswaMutasi::where('mutasi', 'masuk')->where('status','disetujui')->whereMonth('created_at', '09')->get()->count();
        $this->siswaMutasiMasuk10 = DataSiswaMutasi::where('mutasi', 'masuk')->where('status','disetujui')->whereMonth('created_at', '10')->get()->count();
        $this->siswaMutasiMasuk11 = DataSiswaMutasi::where('mutasi', 'masuk')->where('status','disetujui')->whereMonth('created_at', '11')->get()->count();
        $this->siswaMutasiMasuk12 = DataSiswaMutasi::where('mutasi', 'masuk')->where('status','disetujui')->whereMonth('created_at', '12')->get()->count();

        $this->siswaMutasiKeluar = DataSiswaMutasi::where('mutasi', 'keluar')->where('status','disetujui')->get()->count();
        $this->siswaMutasiKeluar01 = DataSiswaMutasi::where('mutasi', 'keluar')->where('status','disetujui')->whereMonth('created_at', '01')->get()->count();
        $this->siswaMutasiKeluar02 = DataSiswaMutasi::where('mutasi', 'keluar')->where('status','disetujui')->whereMonth('created_at', '02')->get()->count();
        $this->siswaMutasiKeluar03 = DataSiswaMutasi::where('mutasi', 'keluar')->where('status','disetujui')->whereMonth('created_at', '03')->get()->count();
        $this->siswaMutasiKeluar04 = DataSiswaMutasi::where('mutasi', 'keluar')->where('status','disetujui')->whereMonth('created_at', '04')->get()->count();
        $this->siswaMutasiKeluar05 = DataSiswaMutasi::where('mutasi', 'keluar')->where('status','disetujui')->whereMonth('created_at', '05')->get()->count();
        $this->siswaMutasiKeluar06 = DataSiswaMutasi::where('mutasi', 'keluar')->where('status','disetujui')->whereMonth('created_at', '06')->get()->count();
        $this->siswaMutasiKeluar07 = DataSiswaMutasi::where('mutasi', 'keluar')->where('status','disetujui')->whereMonth('created_at', '07')->get()->count();
        $this->siswaMutasiKeluar08 = DataSiswaMutasi::where('mutasi', 'keluar')->where('status','disetujui')->whereMonth('created_at', '08')->get()->count();
        $this->siswaMutasiKeluar09 = DataSiswaMutasi::where('mutasi', 'keluar')->where('status','disetujui')->whereMonth('created_at', '09')->get()->count();
        $this->siswaMutasiKeluar10 = DataSiswaMutasi::where('mutasi', 'keluar')->where('status','disetujui')->whereMonth('created_at', '10')->get()->count();
        $this->siswaMutasiKeluar11 = DataSiswaMutasi::where('mutasi', 'keluar')->where('status','disetujui')->whereMonth('created_at', '11')->get()->count();
        $this->siswaMutasiKeluar12 = DataSiswaMutasi::where('mutasi', 'keluar')->where('status','disetujui')->whereMonth('created_at', '12')->get()->count();


        return view('livewire.home-page')->layout('app');
    }
}
