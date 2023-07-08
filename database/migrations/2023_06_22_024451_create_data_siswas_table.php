<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('foto', 80)->nullable();
            $table->string('no_induk', 30)->nullable();
            $table->string('nisn', 30)->nullable();
            $table->string('nama',40);
            $table->string('nama_wali',40)->nullable();
            $table->string('tempat_lahir',30);
            $table->date('tanggal_lahir');
            $table->enum('jeniskelamin', ['l', 'p']);
            $table->string('agama', 20);
            $table->string('no_telp', 17)->nullable();
            $table->string('tahun_masuk',5)->nullable();
            $table->string('kelas',10)->nullable();
            $table->string('tahun_lulus',5)->nullable();
            $table->enum('status_siswa', ['aktif', 'alumni', 'keluar']);
            $table->enum('status', ['pending', 'disetujui', 'ditolak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_siswas');
    }
};
