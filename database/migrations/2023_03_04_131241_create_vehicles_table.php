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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->char('CLASS_ID', 6)->primary();
            $table->char('COURSE_ID', 3);
            $table->char('PRIMARY_INST', 5);
            $table->char('SECONDARY_INST', 5)->nullable();
            $table->date('CLASS_START');
            $table->date('CLASS_END');
            $table->foreign('COURSE_ID')->references('COURSE_ID')->on('courses');
            $table->foreign('PRIMARY_INST')->references('STUFF_ID')->on('stuffs');
            $table->foreign('SECONDARY_INST')->references('STUFF_ID')->on('stuffs');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
