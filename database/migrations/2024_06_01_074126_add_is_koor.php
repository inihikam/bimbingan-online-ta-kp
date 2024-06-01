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
            $table->longText('photo')->nullable()->after('telp_dosen');
            $table->longText('scholar')->nullable()->after('telp_dosen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dosen_pembimbing', function (Blueprint $table) {
            $table->dropColumn('photo');
            $table->dropColumn('scholar');
        });
    }
};
