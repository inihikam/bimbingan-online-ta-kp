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
        Schema::create('history_pengajuan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mhs');
            $table->unsignedBigInteger('id_dsn');
            $table->enum('jalur', ['REGULER', 'PUBLIKASI']);
            $table->string('topik');
            $table->string('judul')->nullable();
            $table->enum('bidang_kajian', ['RPLD', 'SC']);
            $table->string('minat');
            $table->longText('deskripsi');
            $table->enum('status', ['ACC', 'TOLAK', 'PENDING'])->default('PENDING');
            $table->longText('alasan');
            $table->timestamps();

            $table->foreign('id_mhs')->references('id')->on('mahasiswa')->cascadeOnDelete();
            $table->foreign('id_dsn')->references('id')->on('dosen')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_pengajuan');
    }
};
