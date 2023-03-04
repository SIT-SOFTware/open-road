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
        Schema::create('registrations', function (Blueprint $table) {
            $table->char('REG_ID', 4)->primary();
            $table->char('CLASS_ID', 6)->foreign('CLASS_ID')->references('CLASS_ID')->on('pra_classes')->notNull();
            $table->unsignedSmallInteger('INVOICE_ID')->foreign('INVOICE_ID')->references('INVOICE_ID')->on('invoice')->notNull();
            $table->char('STUFF_ID', 5)->foreign('STUFF_ID')->references('STUFF_ID')->on('stuffs')->notNull();
            $table->string('VEHICLE_STOCK_NUM', 17)->foreign('VEHICLE_STOCK_NUM')->references('VEHICLE_STOCK_NUM')->on('vehicles')->notNull();
            $table->unsignedTinyInteger('REGISTRATION_CANCELLED')->notNull();
            $table->unsignedTinyInteger('REGISTRATION_WAITLIST')->notNull();
            $table->dateTime('CREATED')->notNull();
            $table->dateTime('LAST_UPDATED')->notNull();
            $table->dateTime('DELETED')->nullable();
            // $table->foreign('CLASS_ID')->references('CLASS_ID')->on('pra_classes');
            // $table->foreign('INVOICE_ID')->references('INVOICE_ID')->on('invoice');
            // $table->foreign('STUFF_ID')->references('STUFF_ID')->on('stuffs');
            // $table->foreign('VEHICLE_STOCK_NUM')->references('VEHICLE_STOCK_NUM')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
