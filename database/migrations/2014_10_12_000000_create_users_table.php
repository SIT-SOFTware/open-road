<?php

use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // updated configuration required for Spatie/laravel-permission package
            // with unsignedBigInteger $table->unsignedBigInteger('id);
            // with uuid $table->uuid('id');
            // configuration in Spatie required if using uuids
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            //$table->rememberToken();
            //$table->foreignId('current_team_id')->nullable();
            //$table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
