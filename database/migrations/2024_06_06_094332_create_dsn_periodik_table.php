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
        Schema::create('dsn_periodik', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_periode');
            $table->unsignedBigInteger('id_dsn');
            $table->timestamps();

            $table->foreign('id_periode')->references('id')->on('periode')->cascadeOnDelete();
            $table->foreign('id_dsn')->references('id')->on('dosen')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dsn_periodik');
    }
};
