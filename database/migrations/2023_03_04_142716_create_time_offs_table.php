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
        Schema::create('time_offs', function (Blueprint $table) {
            $table->char('STUFF_ID', 5);
            $table->date('DATE_UNAVAIL');
            $table->unsignedTinyInteger('APPROVED')->default(0);
            $table->primary(['STUFF_ID', 'DATE_UNAVAIL']);
            $table->foreign('STUFF_ID')->references('STUFF_ID')->on('stuffs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('time_offs');
    }
};
