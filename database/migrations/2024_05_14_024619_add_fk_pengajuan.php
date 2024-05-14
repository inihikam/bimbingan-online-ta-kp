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
        // Menambahkan Foreign Key pada tabel pengajuan
        Schema::table('pengajuan', function (Blueprint $table) {
            $table->foreign('id_mhs')->references('id_mhs')->on('status_mahasiswa')->onDelete('cascade');
            $table->foreign('id_dospem')->references('id_dospem')->on('dosen_pembimbing')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus Foreign Key pada tabel pengajuan
        Schema::table('pengajuan', function (Blueprint $table) {
            $table->dropForeign(['id_mhs']);
            $table->dropForeign(['id_dospem']);
        });
    }
};
