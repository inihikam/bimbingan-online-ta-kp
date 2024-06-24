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
        Schema::create('status_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mhs');
            $table->unsignedBigInteger('id_dsn');
            $table->enum('ta_1', ['LULUS', 'BELUM', 'PROSES'])->default('BELUM');
            $table->enum('ta_2', ['LULUS', 'BELUM', 'PROSES'])->default('BELUM');
            $table->integer('bab_terakhir')->nullable();
            $table->integer('jml_bimbingan')->default(0);
            $table->enum('status', ['ACC', 'REVISI', 'PENDING'])->default('PENDING');
            $table->enum('sidang_ta_1', ['LULUS', 'BELUM'])->default('BELUM');
            $table->enum('sidang_ta_2', ['LULUS', 'BELUM'])->default('BELUM');
            $table->timestamps();

            $table->foreign('id_mhs')->references('id')->on('mahasiswa')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_mahasiswa');
    }
};
