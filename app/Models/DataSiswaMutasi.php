<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswaMutasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function data_siswa()
    {
        return $this->belongsTo(DataSiswa::class, 'data_siswa_id', 'id');
    }
}
