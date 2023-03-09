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
        Schema::create('incidents', function (Blueprint $table) {
            $table->unsignedSmallInteger('INCIDENT_ID')->primary();
            $table->date('INCIDENT_DATE');
            $table->char('id', 6);
            $table->longText('INCIDENT_DETAILS');
            $table->unsignedTinyInteger('EMERG_SERV_CALLED');
            $table->unsignedTinyInteger('EMERG_CONTACT_CALLED');
            $table->foreign('id')->references('id')->on('pra_classes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidents');
    }
};
