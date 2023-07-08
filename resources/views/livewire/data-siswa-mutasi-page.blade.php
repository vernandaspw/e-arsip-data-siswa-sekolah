<div>
    <div class="">
        <h1 class="mt-4">Data siswa Mutasi</h1>
        <div class="card mb-4">
            <div class="card-header">

                <div class="">Mutasi masuk : {{ $this->datas->where('mutasi', 'masuk')->where('status', 'disetujui')->count() }}</div>
                <div class="">Mutasi keluar : {{ $this->datas->where('mutasi', 'keluar')->where('status', 'disetujui')->count() }}</div>
            </div>
            <div class="card-body">
                @if (auth()->user()->role == 'admin')
                    <div class="my-2">
                        <button type="button" class="btn btn-primary" wire:click='buatPageTrue'>Buat mutasi baru</button>
                    </div>
                @endif
                @if ($buatPage)
                    <h4>Buat Mutasi Siswa</h4>
                    <form wire:submit.prevent='buat'>
                        <div class="mb-2">
                            <label for="">Pilih Mutasi</label>
                            <select required wire:model='mutasi' class="form-control">
                                <option value="">Pilih</option>
                                <option value="masuk">masuk</option>
                                <option value="keluar">keluar</option>

                            </select>
                        </div>
                        <div class="mb-2">

                            <label for="">Pilih Siswa <small class="text-muted">*Jika belum tersedia, tambahkan dahulu data siswa di menu data siswa aktif</small></label>
                            <select required wire:model='data_siswa_id' class="form-control">
                                <option value="">Pilih (Nama - NISN)</option>
                                @foreach ($siswas as $siswa)
                                    <option value="{{ $siswa->id }}">{{ $siswa->nama }}-{{ $siswa->nisn }}</option>
                                @endforeach
                            </select>
                            <small>*Jika belum tersedia, tambahkan dahulu di menu data siswa aktif</small>
                        </div>
                        <div class="mb-2">
                            <label for="">tanggal</label>
                            <input required wire:model='tanggal' type="date" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Kelas</label>
                            <select wire:model='kelas' class="form-control">
                                <option value="">Pilih</option>
                                <option value="X 1">X 1</option>
                                <option value="X 2">X 2</option>
                                <option value="X 3">X 3</option>
                                <option value="X 4">X 4</option>
                                <option value="X 5">X 5</option>
                                <option value="X 6">X 6</option>
                                <option value="X 7">X 7</option>
                                <option value="X 8">X 8</option>
                                <option value="" disabled>-----------------</option>
                                <option value="XI 1">XI 1</option>
                                <option value="XI 2">XI 2</option>
                                <option value="XI 3">XI 3</option>
                                <option value="XI 4">XI 4</option>
                                <option value="XI 5">XI 5</option>
                                <option value="XI 6">XI 6</option>
                                <option value="XI 7">XI 7</option>
                                <option value="XI 8">XI 8</option>
                                <option value="" disabled>-----------------</option>
                                <option value="XII 1">XII 1</option>
                                <option value="XII 2">XII 2</option>
                                <option value="XII 3">XII 3</option>
                                <option value="XII 4">XII 4</option>
                                <option value="XII 5">XII 5</option>
                                <option value="XII 6">XII 6</option>
                                <option value="XII 7">XII 7</option>
                                <option value="XII 8">XII 8</option>
                                <option value="XII 8">XII 8</option>

                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="">Asal sekolah</label>
                            <input required wire:model='asal' type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Tujuan sekolah / Sekolah baru</label>
                            <input required wire:model='tujuan' type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">nomor surat pindah</label>
                            <input wire:model='no_surat_pindah' placeholder="(opsional)" type="text"
                                class="form-control" maxlength="20">
                        </div>
                        <div class="mb-2">
                            <label for="">Keterangan</label>
                            <input required wire:model='keterangan' type="text" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success form-control">Simpan</button>
                    </form>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Mutasi</th>
                                <th>Foto</th>
                                <th>no_induk</th>
                                <th>nisn</th>
                                <th>nama</th>
                                <th>jenis kelamin</th>
                                <th>Tanggal</th>
                                <th>Asal Sekolah</th>
                                <th>Tujuan Sekolah</th>
                                <th>Kelas</th>
                                <th>NO Surat pindah</th>
                                <th>Keterangan</th>
                                <th>Status</th>
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
                            @foreach ($datas as $data)
                                <tr>
                                    <td>
                                        {{ $data->mutasi }}
                                    </td>
                                    <td><img src="{{ Storage::url($data->foto) }}" width="60" height="70"
                                            alt=""></td>
                                    <td>{{ $data->data_siswa->no_induk }}</td>
                                    <td>{{ $data->data_siswa->nisn }}</td>
                                    <td>{{ $data->data_siswa->nama }}</td>
                                    <td>{{ $data->data_siswa->jeniskelamin == 'l' ? 'laki laki' : 'perempuan' }}</td>

                                    <td>
                                        {{ $data->tanggal }}
                                    </td>
                                    <td>
                                        {{ $data->asal }}
                                    </td>
                                    <td>
                                        {{ $data->tujuan }}
                                    </td>
                                    <td>
                                        {{ $data->kelas }}
                                    </td>
                                    <td>
                                        {{ $data->no_surat_pindah }}
                                    </td>
                                    <td>
                                        {{ $data->keterangan }}
                                    </td>
                                    <td>{{ $data->status }}</td>
                                    <td>
                                        @if (auth()->user()->role == 'kepala sekolah')
                                            @if ($data->status == 'pending')
                                                <button class="btn btn-sm btn-success rounded-pill"
                                                    wire:click="setujui('{{ $data->id }}')">Setujui</button>
                                                <button class="btn btn-sm btn-danger rounded-pill"
                                                    wire:click="tolak('{{ $data->id }}')">Tolak</button>
                                            @endif
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
