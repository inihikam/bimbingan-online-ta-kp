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
        Schema::create('logbook', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mhs');
            $table->unsignedBigInteger('id_dsn');
            $table->date('tanggal');
            $table->longText('uraian');
            $table->longText('dokumen');
            $table->enum('status', ['ACC', 'REVISI', 'PENDING'])->default('PENDING');
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
        Schema::dropIfExists('logbook');
    }
};
