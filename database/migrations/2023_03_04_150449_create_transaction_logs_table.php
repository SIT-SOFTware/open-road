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
        Schema::create('transaction_logs', function (Blueprint $table) {
            $table->unsignedSmallInteger('TRANSACTION_ID')->primary();
            $table->unsignedSmallInteger('USER_ID');
            $table->date('TRANSACTION_DATE');
            $table->time('TRANSACTION_TIME');
            $table->char('TRANSACTION_IP_ADDR', 15);
            $table->foreign('USER_ID')->references('USER_ID')->on('user_login');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_logs');
    }
};
