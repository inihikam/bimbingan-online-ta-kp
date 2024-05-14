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
            $table->integer('id_mhs')->primary()->autoIncrement();
            $table->integer('id_dospem');
            $table->string('nim')->unique();
            $table->enum('ta_1', ['ACC', 'REVISI', 'NOT_TAKEN', 'PENDING'])->default('NOT_TAKEN');
            $table->enum('ta_2', ['ACC', 'REVISI', 'NOT_TAKEN', 'PENDING'])->default('NOT_TAKEN');
            $table->integer('bab_terakhir')->nullable();
            $table->integer('jml_bimbingan')->nullable();
            $table->enum('status', ['ACC', 'REVISI'])->nullable();
            $table->enum('sidang_ta_1', ['PASS', 'FAIL', 'NOT_TAKEN'])->default('NOT_TAKEN');
            $table->enum('sidang_ta_2', ['PASS', 'FAIL', 'NOT_TAKEN'])->default('NOT_TAKEN');
            $table->integer('jadwal_sidang_ta_1')->nullable();
            $table->integer('jadwal_sidang_ta_2')->nullable();
            $table->timestamps();
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
