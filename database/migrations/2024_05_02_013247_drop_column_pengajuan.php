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
        // Drop kolom nama, nim, dan ipk pada tabel pengajuan
        Schema::table('pengajuan', function (Blueprint $table) {
            $table->dropColumn('nama');
            $table->dropColumn('nim');
            $table->dropColumn('ipk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('pengajuan', function (Blueprint $table) {
            $table->string('nama')->after('id');
            $table->string('nim')->after('nama');
            $table->string('ipk')->after('nim');
        });
    }
};
