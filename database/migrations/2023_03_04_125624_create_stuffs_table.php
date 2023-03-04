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
        Schema::create('stuffs', function (Blueprint $table) {
            $table->char('STUFF_ID', 5)->primary();
            $table->char('STUFF_LEVEL', 1);
            $table->string('STUFF_PNAME', 20)->nullable();
            $table->string('STUFF_FNAME', 20);
            $table->string('STUFF_LNAME', 20);
            $table->char('STUFF_PHONE', 12);
            $table->string('STUFF_EMAIL', 40);
            $table->date('STUFF_DOB');
            $table->char('STUFF_DLN', 10);
            $table->string('STUFF_ADDR1', 30);
            $table->string('STUFF_ADDR2', 30)->nullable();
            $table->string('STUFF_CITY', 30);
            $table->char('STUFF_PR_ST', 2);
            $table->string('STUFF_COUNTRY', 30);
            $table->string('STUFF_POST_ZIP', 7);
            $table->string('EMERGCONT_NAME', 40)->nullable();
            $table->unsignedInteger('STUFF_WAIVER');
            $table->char('EMERGCONT_PHONE', 12)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stuffs');
    }
};
