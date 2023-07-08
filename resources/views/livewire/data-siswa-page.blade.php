<div>
    <div class="">
        <h1 class="mt-4">Data siswa aktif</h1>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
                <div class="">
                    <i class="fas fa-table me-1"></i>
                    Data
                </div>
                <div class="">
                    <input type="text" placeholder="Cari Nama, Nomor" wire:model='cari' class="form-control"
                        style="width: 300px">
                </div>
            </div>
            <div class="card-body">
                @if (auth()->user()->role == 'admin')
                    <div class="my-2">
                        <button type="button" class="btn btn-primary" wire:click='buatPageTrue'>Tambah siswa
                            baru</button>
                    </div>
                @endif
                @if ($buatPage)
                    <h4>Tambah siswa baru</h4>
                    <form wire:submit.prevent='buat'>
                        <div class="mb-2">
                            <label for="">Foto</label>
                            <input wire:model='foto' type="file" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">no_induk</label>
                            <input wire:model='no_induk' type="number" class="form-control" maxlength="30">
                            @error('no_induk')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">NISN</label>
                            <input wire:model='nisn' type="number" class="form-control" maxlength="30">
                            @error('no_induk')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Nama siswa</label>
                            <input required wire:model='nama' type="text" class="form-control" maxlength="40">
                            @error('nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Nama orang tua / wali</label>
                            <input wire:model='nama_wali' type="text" class="form-control" maxlength="40">
                            @error('nama_wali')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">tempat_lahir</label>
                            <select required wire:model='tempat_lahir' class="form-control">
                                <option value="">Pilih</option>
                                <option value="Palembang">Palembang</option>
                                <option value="Banyuasin">Banyuasin</option>
                                <option value="Empat Lawang">Empat Lawang</option>
                                <option value="Lahat">Lahat</option>
                                <option value="Muara Enim">Muara Enim</option>
                                <option value="Muara">Muara</option>
                                <option value="Musi Banyuasin">Musi Banyuasin</option>
                                <option value="Musi Rawas">Musi Rawas</option>
                                <option value="Musi Rawas Utara">Musi Rawas Utara</option>
                                <option value="Ogan Ilir">Ogan Ilir</option>
                                <option value="Ogan Komering Ilir">Ogan Komering Ilir</option>
                                <option value="Ogan Komering Ulu">Ogan Komering Ulu</option>
                                <option value="Ogan Komering Ulu Selatan">Ogan Komering Ulu Selatan</option>
                                <option value="Ogan Komering Ulu Timur">Ogan Komering Ulu Timur</option>
                                <option value="Penukal Abab Lematang Ilir">Penukal Abab Lematang Ilir</option>
                                <option value="Lubuklinggau">Lubuklinggau</option>
                                <option value="Pagar Alam">Pagar Alam</option>
                                <option value="Prabumulih">Prabumulih</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="">tanggal lahir</label>
                            <input required wire:model='tanggal_lahir' type="date" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label for="">Jenis kelamin</label>
                            <select required wire:model='jeniskelamin' class="form-control">
                                <option value="">Pilih</option>
                                <option value="l">laki laki</option>
                                <option value="p">perempuan</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="">Agama</label>
                            <select required wire:model='agama' class="form-control">
                                <option value="">Pilih</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="">no_telp</label>
                            <input required wire:model='no_telp' type="number" class="form-control" maxlength="17">
                            @error('no_telp')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Kelas</label>
                            <select wire:model='kelas' class="form-control">
                                <option value="">Pilih</option>
                                <option value="X IPA 1">X 1</option>
                                <option value="X IPA 2">X IPA 2</option>
                                <option value="X IPA 3">X IPA 3</option>
                                <option value="X IPA 4">X IPA 4</option>
                                <option value="X IPA 5">X IPA 5</option>
                                <option value="" disabled>-----------------</option>
                                <option value="XI IPA 1">XI IPA 1</option>
                                <option value="XI IPA 2">XI IPA 2</option>
                                <option value="XI IPA 3">XI IPA 3</option>
                                <option value="XI IPA 4">XI IPA 4</option>
                                <option value="XI IPA 5">XI IPA 5</option>
                                <option value="" disabled>-----------------</option>
                                <option value="XII IPA 1">XII IPA 1</option>
                                <option value="XII IPA 2">XII IPA 2</option>
                                <option value="XII IPA 3">XII IPA 3</option>
                                <option value="XII IPA 4">XII IPA 4</option>
                                <option value="XII IPA 5">XII IPA 5</option>
                                <option value="" disabled>-----------------</option>
                                <option value="X IPS 1">X IPS 1</option>
                                <option value="X IPS 2">X IPS 2</option>
                                <option value="X IPS 3">X IPS 3</option>
                                <option value="X IPS 4">X IPS 4</option>
                                <option value="X IPS 5">X IPS 5</option>
                                <option value="" disabled>-----------------</option>
                                <option value="XI IPS 1">XI IPS 1</option>
                                <option value="XI IPS 2">XI IPS 2</option>
                                <option value="XI IPS 3">XI IPS 3</option>
                                <option value="XI IPS 4">XI IPS 4</option>
                                <option value="XI IPS 5">XI IPS 5</option>
                                <option value="" disabled>-----------------</option>
                                <option value="XII IPS 1">XII IPS 1</option>
                                <option value="XII IPS 2">XII IPS 2</option>
                                <option value="XII IPS 3">XII IPS 3</option>
                                <option value="XII IPS 4">XII IPS 4</option>
                                <option value="XII IPS 5">XII IPS 5</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="">tahun masuk</label>
                            <input wire:model='tahun_masuk' type="number" class="form-control" maxlength="4">
                        </div>
                        <div class="input-group mb-2 form-control">
                            <div class="me-2">
                                <label for="">Keterangan lampiran 1</label>
                                <select wire:model='keterangan1' class="form-control">
                                    <option value="">Pilih</option>
                                    <option value="Ijazah Terakhir">Ijazah terakhir</option>
                                    <option value="Transkrip Terakhir">Transkrip Terakhir</option>
                                    <option value="Akta kelahiran">Akta kelahiran</option>
                                    <option value="Kartu keluarga">Kartu keluarga</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="">Lamiran 1</label>
                                <input wire:model='file1' type="file" class="form-control">
                            </div>
                        </div>
                        <div class="input-group mb-2 form-control">
                            <div class="me-2">
                                <label for="">Keterangan lampiran 2</label>
                                <select wire:model='keterangan2' class="form-control">
                                    <option value="">Pilih</option>
                                    <option value="Ijazah Terakhir">Ijazah terakhir</option>
                                    <option value="Transkrip Terakhir">Transkrip Terakhir</option>
                                    <option value="Akta kelahiran">Akta kelahiran</option>
                                    <option value="Kartu keluarga">Kartu keluarga</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="">Lamiran 2</label>
                                <input wire:model='file2' type="file" class="form-control">
                            </div>
                        </div>
                        <div class="input-group mb-2 form-control">
                            <div class="me-2">
                                <label for="">Keterangan lampiran 3</label>
                                <select wire:model='keterangan3' class="form-control">
                                    <option value="">Pilih</option>
                                    <option value="Ijazah Terakhir">Ijazah terakhir</option>
                                    <option value="Transkrip Terakhir">Transkrip Terakhir</option>
                                    <option value="Akta kelahiran">Akta kelahiran</option>
                                    <option value="Kartu keluarga">Kartu keluarga</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="">Lamiran 3</label>
                                <input wire:model='file3' type="file" class="form-control">
                            </div>
                        </div>





                        <button type="submit" class="btn btn-success form-control">Simpan</button>
                    </form>
                @elseif ($alumniPage)
                    <h4>Tambahkan ke data alumni</h4>
                    <form wire:submit.prevent='simpanAlumni'>
                        <div class="mb-2">
                            <label for="">tahun lulus</label>
                            <input required wire:model='tahun_lulus' type="number" class="form-control"
                                maxlength="4" max="9000">
                        </div>
                        <button type="submit" class="btn btn-success form-control">Simpan</button>
                    </form>
                @elseif ($lampiranPage)
                    <h4>Tambah lampiran</h4>
                    <form wire:submit.prevent='simpanLampiran'>
                        <div class="mb-2">
                            <label for="">Lamiran</label>
                            <input wire:model='file' type="file" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Keterangan lampiran</label>
                            <input wire:model='keterangan' placeholder="kartu, akta, ijazah.." type="text"
                                class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success form-control">Simpan</button>
                    </form>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>no_induk</th>
                                <th>nisn</th>
                                <th>nama</th>
                                <th>Kelas</th>
                                <th>nama_wali</th>
                                <th>tempat_lahir</th>
                                <th>jenis kelamin</th>
                                <th>agama</th>
                                <th>No Telp</th>
                                <th>Tahun masuk</th>
                                <th>Status siswa</th>
                                <th>Status</th>
                                <th>Lampiran</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @foreach ($datas as $akun)
                                <tr>
                                    <td><img src="
                                        @if($akun->foto)
                                        {{ Storage::url($akun->foto) }}
                                        @else
                                        {{ asset('avatar.png') }}
                                        @endif
                                        " width="60" height="70"
                                            alt=""></td>
                                    <td>{{ $akun->no_induk }}</td>
                                    <td>{{ $akun->nisn }}</td>
                                    <td>{{ $akun->nama }}</td>
                                    <td>{{ $akun->kelas }}</td>
                                    <td>{{ $akun->nama_wali }}</td>
                                    <td>{{ $akun->tempat_lahir }}, {{ $akun->tanggal_lahir }}</td>
                                    <td>{{ $akun->jeniskelamin == 'l' ? 'laki laki' : 'perempuan' }}</td>
                                    <td>{{ $akun->agama }}</td>
                                    <td>{{ $akun->no_telp }}</td>
                                    <td>{{ $akun->tahun_masuk }}</td>
                                    <td>{{ $akun->status_siswa }}</td>
                                    <td>{{ $akun->status }}</td>
                                    <td>
                                        @foreach ($akun->lampiran as $d)
                                            <div class="d-flex">
                                                - <a href="{{ Storage::url($d->file) }}" target="_blank"
                                                    rel="noopener noreferrer">
                                                    {{ $d->keterangan }}</a>
                                            </div>
                                        @endforeach
                                        @if (auth()->user()->role == 'admin')
                                            <button class="btn btn-sm btn-info rounded-pill"
                                                wire:click="lampiranPageTrue('{{ $akun->id }}')">Tambah</button>
                                        @endif
                                    </td>
                                    <td>
                                        @if (auth()->user()->role == 'kepala sekolah')
                                            @if ($akun->status == 'pending')
                                                <button class="btn btn-sm btn-success rounded-pill"
                                                    wire:click="setujui('{{ $akun->id }}')">Setujui</button>
                                                <button class="btn btn-sm btn-danger rounded-pill"
                                                    wire:click="tolak('{{ $akun->id }}')">Tolak</button>
                                            @endif
                                        @elseif(auth()->user()->role == 'admin')
                                            @if ($akun->status == 'disetujui' && $akun->status_siswa == 'aktif')
                                                <button class="btn btn-sm btn-warning rounded-pill"
                                                    wire:click="alumniPageTrue('{{ $akun->id }}')">Jadi
                                                    Alumni</button>
                                            @endif
                                            <button class="btn btn-sm btn-danger rounded-pill m-1"
                                                wire:click="hapus('{{ $akun->id }}')">Hapus</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
