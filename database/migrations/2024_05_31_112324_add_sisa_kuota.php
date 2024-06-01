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
        Schema::table('dosen_pembimbing', function (Blueprint $table) {
            $table->integer('sisa_kuota')->virtualAs('kuota_mhs_ta - acc_ajuan')->after('acc_ajuan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dosen_pembimbing', function (Blueprint $table) {
            $table->dropColumn('sisa_kuota');
        });
    }
};
