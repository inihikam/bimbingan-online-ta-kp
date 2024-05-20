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
        Schema::create('logbook_bimbingan', function (Blueprint $table) {
            $table->increments('id_logbook');
            $table->integer('id_mhs');
            $table->integer('id_dospem');
            $table->date('tanggal_bimbingan');
            $table->longText('uraian_bimbingan');
            $table->integer('bab_terakhir_bimbingan');
            $table->enum('status_logbook', ['ACC', 'REVISI', 'PENDING'])->default('PENDING');
            $table->longText('dokumen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logbook_bimbingan');
    }
};
