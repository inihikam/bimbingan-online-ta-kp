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
        Schema::table('pengajuan', function (Blueprint $table) {
            $table->enum('jalur', ['REGULER', 'PUBLIKASI'])->default('REGULER');
            $table->string('judul')->nullable()->change();
            $table->string('catatan')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengajuan', function (Blueprint $table) {
            $table->dropColumn('jalur');
            $table->string('judul')->nullable(false)->change();
            $table->string('catatan')->nullable(false)->change();
        });
    }
};
