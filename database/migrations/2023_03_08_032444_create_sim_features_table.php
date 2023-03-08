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
        Schema::create('sim_features', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sim_id');
            $table->foreign('sim_id')->references('id')->on('sims')->onDelete('cascade');
            $table->string('nama')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sim_features');
    }
};
