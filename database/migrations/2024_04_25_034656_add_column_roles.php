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
        // Menambahkan kolom roles setelah password pada tabel users
        Schema::table('users', function (Blueprint $table) {
            $table->string('roles')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //reverse migration
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('roles');
        });
    }
};
