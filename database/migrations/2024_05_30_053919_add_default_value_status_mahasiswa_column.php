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
        // Menambahkan default value dari id_dospem pada tabel status mahasiswa
        Schema::table('status_mahasiswa', function (Blueprint $table) {
            $table->integer('id_dospem')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('status_mahasiswa', function (Blueprint $table) {
            $table->integer('id_dospem')->change();
        });
    }
};
