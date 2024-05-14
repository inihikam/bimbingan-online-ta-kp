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
        Schema::create('pengajuan_sidang', function (Blueprint $table) {
            $table->id();
            $table->integer('id_mhs');
            $table->integer('id_dospem');
            $table->string('judul');
            $table->enum('bidang_kajian', ['SC', 'RPLD', 'SKKKD']);
            $table->longText('dokumen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_sidang');
    }
};
