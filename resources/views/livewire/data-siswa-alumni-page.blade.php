<div>
    <div class="">
        <h1 class="mt-4">Data siswa Alumni</h1>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
                <div class="">
                    <i class="fas fa-table me-1"></i>
                Data
                </div>
                <div class="">
                    <input type="text" placeholder="Cari Nama, Nomor" wire:model='cari' class="form-control" style="width: 300px">
                </div>
            </div>
            <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>no_induk</th>
                                <th>nisn</th>
                                <th>nama</th>
                                <th>kelas</th>
                                <th>nama_wali</th>
                                <th>tempat_lahir</th>
                                <th>jenis kelamin</th>
                                <th>agama</th>
                                <th>No Telp</th>
                                <th>Tahun masuk</th>
                                <th>Tahun lulus</th>
                                <th>Status siswa</th>
                                <th>Status</th>
                                <th>lampiran</th>

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
                                    <td><img src="{{ Storage::url($data->foto) }}" width="60" height="70" alt=""></td>
                                    <td>{{ $data->no_induk }}</td>
                                    <td>{{ $data->nisn }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->kelas }}</td>
                                    <td>{{ $data->nama_wali }}</td>
                                    <td>{{ $data->tempat_lahir }}, {{ $data->tanggal_lahir }}</td>
                                    <td>{{ $data->jeniskelamin == 'l' ? 'laki laki' : 'perempuan' }}</td>
                                    <td>{{ $data->agama }}</td>
                                    <td>{{ $data->no_telp }}</td>
                                    <td>{{ $data->tahun_masuk }}</td>
                                    <td>{{ $data->status_siswa }}</td>
                                    <td>{{ $data->status }}</td>
                                    <td>
                                        @foreach ($data->lampiran as $d)
                                        <div class="d-flex">
                                            - <a href="{{ Storage::url($d->file) }}" target="_blank" rel="noopener noreferrer">
                                                {{ $d->keterangan }}</a>
                                        </div>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

            </div>
        </div>
    </div>
</div>
