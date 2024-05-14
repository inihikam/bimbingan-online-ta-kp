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
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_mhs');
            $table->string('topik');
            $table->string('judul');
            $table->enum('bidang_kajian', ['SC', 'RPLD', 'SKKKD']);
            $table->string('keyword');
            $table->longText('deskripsi');
            $table->string('catatan');
            $table->integer('id_dospem');
            $table->enum('status', ['ACC', 'TOLAK', 'PENDING'])->default('PENDING');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_pengajuan');
    }
};
