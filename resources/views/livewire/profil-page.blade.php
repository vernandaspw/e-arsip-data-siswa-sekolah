<div>
    <div class="col-md-5">
        <h1 class="mt-4">Profil page</h1>
        <div class="card mb-4">
            <div class="card-header">
                Profile
            </div>
            <div class="card-body">


                    <h4>Profile</h4>
                    <form wire:submit.prevent='simpan'>
                        <div class="mb-2">
                            <label for="">Nama</label>
                            <input required wire:model='nama' type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Username</label>
                            <input required wire:model='username' type="text" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success form-control">Perbarui</button>
                    </form> 
            </div>
        </div>
    </div>
</div>
