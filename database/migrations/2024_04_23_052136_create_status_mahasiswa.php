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
            $table->integer('id_mhs')->primary();
            $table->integer('id_dospem');
            $table->string('nim')->unique();
            $table->enum('ta_1', ['PASS', 'FAIL'])->default('FAIL');
            $table->enum('ta_2', ['PASS', 'FAIL'])->default('FAIL');
            $table->integer('bab_terakhir')->nullable();
            $table->integer('jml_bimbingan')->nullable();
            $table->enum('status', ['ACC', 'REVISI'])->nullable();
            $table->enum('sidang_ta_1', ['PASS', 'FAIL'])->default('FAIL');
            $table->enum('sidang_ta_2', ['PASS', 'FAIL'])->default('FAIL');
            $table->timestamps();

            $table->foreign('nim')->references('nim')->on('mahasiswa')->cascadeOnDelete();
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
