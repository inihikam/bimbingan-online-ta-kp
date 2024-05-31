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
            $table->integer('jml_ajuan')->default(0)->change();
            $table->integer('acc_ajuan')->default(0)->change();
            $table->enum('status_dospem', ['AVAILABLE', 'FULL'])->default('AVAILABLE')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dosen_pembimbing', function (Blueprint $table) {
            $table->integer('jml_ajuan')->change();
            $table->integer('acc_ajuan')->change();
            $table->enum('status_dospem', ['AVAILABLE', 'FULL'])->change();
        });
    }
};
