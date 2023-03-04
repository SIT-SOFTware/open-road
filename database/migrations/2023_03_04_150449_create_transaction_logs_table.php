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
            $table->date('TRANSACTION_DATE');
            $table->time('TRANSACTION_TIME');
            $table->char('TRANSACTION_IP_ADDR', 15);
            $table->foreignId('id')->references('id')->on('users');
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
