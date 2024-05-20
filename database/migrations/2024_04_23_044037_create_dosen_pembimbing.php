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
        Schema::create('dosen_pembimbing', function (Blueprint $table) {
            $table->increments('id_dospem');
            $table->string('nama');
            $table->string('npp')->unique();
            $table->enum('bidang_kajian', ['SC', 'RPLD', 'SKKKD']);
            $table->integer('kuota_mhs_ta');
            $table->integer('jml_ajuan');
            $table->integer('acc_ajuan');
            $table->integer('sisa_kuota');
            $table->enum('status_dospem', ['AVAILABLE', 'FULL']);
            $table->string('email')->unique();
            $table->string('telp_dosen')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen_pembimbing');
    }
};
