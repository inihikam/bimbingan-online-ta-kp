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
        // Menambahkan Foreign Key pada tabel status_mahasiswa
        Schema::table('status_mahasiswa', function (Blueprint $table) {
            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus Foreign Key pada tabel status_mahasiswa
        Schema::table('status_mahasiswa', function (Blueprint $table) {
            $table->dropForeign(['nim']);
        });
    }
};
