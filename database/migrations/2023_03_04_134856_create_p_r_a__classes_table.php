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
        Schema::create('pra_classes', function (Blueprint $table) {
            $table->string('CLASS_ID', 6)->primary();
            $table->string('COURSE_ID', 3);
            $table->string('PRIMARY_INST', 5);
            $table->string('SECONDARY_INST', 5)->nullable();
            $table->date('CLASS_START');
            $table->date('CLASS_END');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('COURSE_ID')->references('COURSE_ID')->on('courses');
            $table->foreign('PRIMARY_INST')->references('STUFF_ID')->on('stuffs');
            $table->foreign('SECONDARY_INST')->references('STUFF_ID')->on('stuffs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pra_classes');
    }
};
