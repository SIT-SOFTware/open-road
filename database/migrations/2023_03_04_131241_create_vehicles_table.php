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
            $table->string('VEHICLE_STOCK_NUM', 17)->primary();
            $table->string('VEHICLE_VIN', 17)->unique();
            $table->char('VEHICLE_YEAR', 4);
            $table->string('VEHICLE_MAKE', 20);
            $table->string('VEHICLE_MODEL', 40);
            $table->char('VEHICLE_ODO', 10);
            $table->unsignedInteger('VEHICLE_TYPE');
            $table->string('VEHICLE_COLOR', 10)->nullable();
            $table->string('VEHICLE_SIZE', 4);
            $table->unsignedInteger('AVAIL_STATUS');
            $table->string('NOTES', 256)->nullable();
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
