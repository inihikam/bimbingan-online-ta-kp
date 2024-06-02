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
        Schema::table('logbook_bimbingan', function (Blueprint $table) {
            // Menghapus fk pada id_mhs dan id_dospem
            $table->dropForeign(['id_mhs']);
            $table->dropForeign(['id_dospem']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('logbook_bimbingan', function (Blueprint $table) {
            // Menambahkan fk pada id_mhs dan id_dospem
            $table->foreign('id_mhs')->references('id_mhs')->on('status_mahasiswa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_dospem')->references('id_dospem')->on('dosen_pembimbing')->onUpdate('cascade')->onDelete('cascade');
        });
    }
};
