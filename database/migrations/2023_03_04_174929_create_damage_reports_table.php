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
        Schema::create('damage_reports', function (Blueprint $table) {
            $table->unsignedSmallInteger('INCIDENT_ID');
            $table->string('VEHICLE_STOCK_NUM', 17);
            $table->mediumText('DAMAGE_DESCRIPTION')->nullable();
            $table->primary(['INCIDENT_ID', 'VEHICLE_STOCK_NUM']);
            $table->foreign('INCIDENT_ID')->references('INCIDENT_ID')->on('incidents')->onDelete('cascade');
            $table->foreign('VEHICLE_STOCK_NUM')->references('VEHICLE_STOCK_NUM')->on('vehicles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('damage_reports');
    }
};
