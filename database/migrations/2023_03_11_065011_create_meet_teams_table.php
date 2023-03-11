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
        Schema::create('meet_teams', function (Blueprint $table) {
            $table->id();
            $table->string('NAME', 50);
            $table->string('ROLE', 128);
            $table->string('BIO', 2048);
            $table->string('FILEPATH', 256);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meet_teams');
    }
};
