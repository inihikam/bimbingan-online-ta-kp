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
        Schema::create('mhs_periodik', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_periode');
            $table->unsignedBigInteger('id_mhs');
            $table->timestamps();

            $table->foreign('id_mhs')->references('id')->on('mahasiswa');
            $table->foreign('id_periode')->references('id')->on('periode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mhs_periodik');
    }
};
