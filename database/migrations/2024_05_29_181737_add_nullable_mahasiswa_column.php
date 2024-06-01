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
        // Menambahkan nullable pada kolom ipk, transkrip nilai, telp_mhs dan tentu saja unique
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->double('ipk')->nullable()->change();
            $table->longText('transkrip_nilai')->nullable()->change();
            $table->string('telp_mhs')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->double('ipk')->nullable(false)->change();
            $table->longText('transkrip_nilai')->nullable(false)->change();
            $table->string('telp_mhs')->nullable(false)->change();
        });
    }
};
