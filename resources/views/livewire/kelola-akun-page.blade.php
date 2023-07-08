<div>
    <div class="">
        <h1 class="mt-4">Kelola akun</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data
            </div>
            <div class="card-body">
                <div class="my-2">
                    <button type="button" class="btn btn-primary" wire:click='buatPageTrue'>Buat akun</button>
                </div>
               @if($buatPage)
                <form wire:submit.prevent='buat'>
                    <div class="mb-2">
                        <label for="">Nama</label>
                        <input required wire:model='nama' type="text" class="form-control" maxlength="40">
                    </div>
                    <div class="mb-2">
                        <label for="">username</label>
                        <input required wire:model='username' type="text" class="form-control" maxlength="20">
                    </div>
                    <div class="mb-2">
                        <label for="">password</label>
                        <input required wire:model='password' type="text" class="form-control" >
                    </div>
                    <div class="mb-2">
                        <label for="">role</label>
                        <select required wire:model='role'  class="form-control">
                            <option value="">Pilih</option>
                            <option value="admin">admin</option>
                            <option value="kepala sekolah">kepala sekolah</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success form-control">Simpan</button>
                </form>
                    @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Status</th>
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
                                    <td>{{ $akun->nama }}</td>
                                    <td>{{ $akun->username }}</td>
                                    <td>{{ $akun->role }}</td>
                                    <td>
                                        @if ($akun->aktif)
                                            <button class="btn btn-success rounded-pill"
                                                wire:click="ubahStatus('{{ $akun->id }}')">Aktif</button>
                                        @else
                                            <button class="btn btn-danger rounded-pill"
                                                wire:click="ubahStatus('{{ $akun->id }}')">Tidak aktif</button>
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
