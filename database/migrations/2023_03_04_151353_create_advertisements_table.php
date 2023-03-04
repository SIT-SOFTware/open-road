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
        Schema::create('advertisements', function (Blueprint $table) {            
            $table->unsignedSmallInteger('ADVERTISEMENT_ID')->primary();
            $table->string('AD_TITLE', 20);
            $table->string('AD_DESCRIPTION', 256);
            $table->string('AD_URL', 256)->nullable();
            $table->string('AD_PATH', 256);
            $table->unsignedTinyInteger('AD_SPACE_TYPE');
            $table->string('AD_LOCATION', 256)->nullable();
            $table->date('START_DATE');
            $table->date('END_DATE')->nullable();
            $table->dateTime('CREATED');
            $table->dateTime('LAST_UPDATED');
            $table->dateTime('DELETED')->nullable();

            $table->foreignId('id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisements');
    }
};
