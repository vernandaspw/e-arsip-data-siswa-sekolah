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
        Schema::create('data_siswa_mutasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('data_siswa_id')->constrained('data_siswas')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('mutasi', ['masuk', 'keluar']);
            $table->date('tanggal');
            $table->text('asal');
            $table->text('tujuan');
            $table->string('kelas', 10)->nullable();
            $table->string('no_surat_pindah', 20)->nullable();
            $table->longText('keterangan')->nullable();
            $table->enum('status', ['pending', 'disetujui', 'ditolak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_siswa_mutasis');
    }
};
