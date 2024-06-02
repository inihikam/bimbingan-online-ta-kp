<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('history_pengajuan', function (Blueprint $table) {
            $table->string('topik')->nullable()->change();
            $table->string('judul')->nullable()->change();
            $table->enum('bidang_kajian', ['SC', 'RPLD', 'SKKD'])->nullable()->change();
            $table->string('keyword')->nullable()->change();
            $table->longText('deskripsi')->nullable()->change();
            $table->longText('catatan')->nullable()->change();
            $table->string('alasan_penolakan')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('history_pengajuan', function (Blueprint $table) {
            $table->string('topik')->nullable(false)->change();
            $table->string('judul')->nullable(false)->change();
            $table->enum('bidang_kajian', ['SC', 'RPLD', 'SKKD'])->nullable(false)->change();
            $table->string('keyword')->nullable(false)->change();
            $table->longText('deskripsi')->nullable(false)->change();
            $table->longText('catatan')->nullable(false)->change();
            $table->string('alasan_penolakan')->nullable(false)->change();
        });
    }
};
